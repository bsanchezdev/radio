<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tandas
 *
 * @author nocturnus
 */
class Tandas extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function filas_() {
       $r= $this->db->select("ruta,archivo")->distinct()->from("tandas")->get()->result();
        return count($r);
    }
    function listado($pagination, $segment) {
    $this->db->select("ruta,archivo")->distinct();
    $this->db->order_by('archivo', 'asc');
    $this->db->limit($pagination, $segment);
    $query = $this->db->get('tandas')->result();

    return $query;

    }
    public function insert_batch($data)
    {
       $ret = $this->db->insert_batch('tandas', $data);
//       $error=$this->db->_error_message();
       
       if($ret<1):
           $error_m=      $this->db->error();
       $error_m["Success"]=FALSE;
           return $error_m;
       endif;
     
    return array("Success"=>TRUE,"Datos Insertados: "=>$ret);
    }
    public function insert($data)
    {
    $ret = $this->db->insert('tandas', $data);
 //   $error=$this->db->_error_message();
    return $ret;
    /*   if($query -> num_rows() > 0)
        {
          return $query->result();
        }
        else
        {
            return false;
        }*/
    }
    
    
    
    public function front_data($pagination,$segment) {
      
    $query=   $this->db->select("tandas.tanda,"
               . "tandas.archivo")
               ->distinct()
               ->from("tandas")
            ->limit($pagination, $segment)
        ->get()->result();
    $lq=  $this->db->last_query();
    
    return $query;
    }
    
    public function filas_front() {
       $query=   $this->db->select(
                "tandas.tanda,"
               . "tandas.archivo")
               ->distinct()
               ->from("tandas")
        ->get()->result();
        return count($query);
    }
    
    
    
    
    
    
    
    public function i_arch($arch,$path) {
        
        $data=array("archivo"=>$arch,"path"=>$path);
        $this->db->insert('archivos',$data);
        return $this->db->insert_id();
    }
    
    public function i_tanda($tanda,$id_archivo) {
        $data=array("tanda"=>$tanda,"id_archivo"=>$id_archivo);
        $this->db->insert('tanda', $data);
        return $this->db->insert_id();
    }
    
    public function i_audio($id_tanda,$path) {
        
        $data=array("id_tanda"=>$id_tanda,"archivo_audio_path"=>$path);
        $this->db->insert('audio',$data);
        return $this->db->insert_id();
    }
    
    public function i_data($id_tanda,$dato) {
        
        $data=array("id_tanda"=>$id_tanda,"data"=>$dato);
        $this->db->insert('data',$data);
        return $this->db->insert_id();
    }
    
}
