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
    
}
