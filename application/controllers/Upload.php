<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Upload
 *
 * @author nocturnus
 */
class Upload extends CI_Controller{
    protected $data_task=array();
    public function __construct() {
        parent::__construct();
        $this->load->model("tandas");
    }
    
    public function index($param) {
        $r=1;
    }
    
     public function carga_a($plugin,$modulo) {
        
        $mi_archivo = 'archivo_archi';
        $config['upload_path']      =   "uploads/"  ;
      //  $config['file_name'] = $_FILES["mi_archvo"]["name"];
        $config['allowed_types']     =  "txt|csv|log";
        $config['max_size']         =   "50000"     ;
        $config['max_width']        =   "2000"      ;
        $config['max_height']       =   "2000"      ;
        $config['overwrite']        =   true        ;

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data["upload_msg"]['Error'] = $this->upload->display_errors();
        }else{
              $data["upload_msg"]['Success'] = $this->upload->data(); 
        }
        $data["u_"]=$this->u_;
        $data["plugin"] = $data["plug"] =$plugin;
        $data["ruta_pm"]=$plugin."/".$modulo;
        $data["modulo"]=$modulo;    
        $data["paginacion"]="";
        
        if(!isset($data["upload_msg"]['Error'])):
         // $data["upload_msg"]["Success"] =  $this->procesa($data["upload_msg"]["Success"]);
         $data["LOG"]=$this->p_r(true);
        endif;
        $this->urnusdev_c_2->route_panel($data,$this);
    }
    protected function procesa($data)
    {
        $tandas=array();
        $this->load->helper('urnusdev/archivos');
        $datos = open($data["full_path"]);
        $datos_tanda=array();
        $lineas="";
        
        $contador = $sub_contador=1;
        while(!feof($datos))
	{
           $linia=fgets($datos);
	   if(strpos($linia, "Tanda")):
               $total=0;
               $tanda=  str_replace("/", " ", $linia)   ;
               $tanda= trim($tanda)   ;
         //  $tandas[$contador]="init";
           $linia="";
           endif;
           
           if($linia!="" && ord($linia)!=13 && ord($linia)!=10 ):
               $ord=ord($linia);
               $tandas[$tanda][$total]=$linia;
           $datos_tanda[$contador]["archivo"]=utf8_encode($data["full_path"])   ;
           $datos_tanda[$contador]["tanda"]=utf8_encode($tanda)                 ;
           $datos_tanda[$contador]["data"]=utf8_encode($linia)                  ;
           
              
                     
           endif;
           
           
           
	    $total++;
            $contador++;
	}
        
         $data["MSG_DB"]=$this->tandas->insert_batch($datos_tanda);
	$mensaje = "El total de filas del archivo ".$data["full_path"]." es: $total";
	fclose($datos);
        return $data;
        
        
    }
    public function p_r($flag=false) {
        $this->benchmark->mark('urnus');
        $tandas=array();
        $this->load->helper('urnusdev/archivos');
        
      //  $dir=$_SERVER["DOCUMENT_ROOT"];
        $dir=$_SERVER["SCRIPT_FILENAME"];
        $dir= dirname($dir);
        $directorio=get_dir_file_info($dir."/uploads/");
        foreach ($directorio as $key => $value) {
            $this->proc_task($value["server_path"],$dir,$value["name"]);
        }
        
       $this->benchmark->mark('dev');
       if(!$flag):
       echo "Tiempo de ejecución: ".$this->benchmark->elapsed_time('urnus', 'dev')."<p>";
       echo json_encode($this->data_task);
       else:
           return $this->data_task;
       endif;
 
    }
    
    protected function proc_task($archivo,$directorio,$nombre_arch) {
        if(is_dir($archivo)):
            return;
        endif;
        
        $contador = $sub_contador=1;
        $realPath=  str_replace($nombre_arch, "", $archivo);
        $o=chr(92);$s = explode($o, $realPath);$b  = explode("/", $realPath);
        if(count($s)>count($b)):
                  $s=$o;
        else:
        $s="/";
        endif;
        $datos_tanda=array();
            $datos = open($archivo);
        while(!feof($datos))
	{
           $linia=fgets($datos);
	   if(strpos($linia, "Tanda")):
               $total=0;
               $tanda=  str_replace("/", " ", $linia)   ;
               $tanda= trim($tanda)   ;
         //  $tandas[$contador]="init";
           $linia="";
           endif;
           
           if($linia!="" && ord($linia)!=13 && ord($linia)!=10 ):
               $ord=ord($linia);
               $tandas[$tanda][$total]=$linia;
           $datos_tanda[$contador]["ruta"]=  utf8_encode($realPath."procesados$s");
           $datos_tanda[$contador]["archivo"]=utf8_encode($nombre_arch)   ;
           $datos_tanda[$contador]["tanda"]=utf8_encode($tanda)                 ;
           $datos_tanda[$contador]["data"]=utf8_encode($linia)                  ;
           
              
                     
           endif;
           
           
           
	    $total++;
            $contador++;
	}
        
       $this->data_task["MSG_DB"][$archivo]=$this->tandas->insert_batch($datos_tanda);
        fclose($datos);
        
              
              
               $pr_arch="\\procesados\\".$nombre_arch;
                if($this->data_task["MSG_DB"][$archivo]["Success"]):
                 $r= rename( $archivo, $realPath."procesados$s".$nombre_arch );
                else:
                 $r= rename( $archivo, $realPath."error$s".$nombre_arch );  
                    $file = fopen($realPath."error$s"."logs$s"."error_$nombre_arch.txt", "w");
                    $CI=&get_instance();
                    
                    fwrite($file, 
                            "ERROR LOG: "
                            .PHP_EOL.
                            $this->data_task["MSG_DB"][$archivo]["message"]
                            . PHP_EOL.
                            "Query: ".$CI->db->last_query()
                            
                            );
                    fclose($file);
                  endif;
                
    }
}

