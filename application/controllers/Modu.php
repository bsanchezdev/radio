<?php
/**
 * Description of Moduload
 *
 * @author nocturnus
 */
class Modu extends CI_Controller{
   function __construct()
    {
        parent::__construct();

    }
    
    function index()
    {
   //     die();
        
    }
    
    function load($plugin="",$modulo="",$paginacion="")
    {
        
//        $data["app"]=$this->sis->app_var();
      //  $this->load->library('Table');
        $data["u_"]=$this->u_;
        $data["plugin"] = $data["plug"] =$plugin;
        $data["ruta_pm"]=$plugin."/".$modulo;
        
        $data["modulo"]=$modulo;    
        $data["paginacion"]=$paginacion;
     //   $data["table"]=$this->table;
        
        $this->urnusdev_c_2->route_panel($data,$this);
        if(is_numeric($paginacion)||!isset($paginacion)):
       //     $data["paginacion"]=$paginacion;
        //$this->urnusdev_c_2->route_panel($data,$this);
        
        endif;
        
    }
}
