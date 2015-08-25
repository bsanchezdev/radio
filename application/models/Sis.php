<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of general
 *
 * @author nocturnus
 */
class Sis extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function regiones() {
        
        $query = $this->db->select('re_id,re_titulo')
                ->get("region");
        $lq=$this->db->last_query();
        if($query -> num_rows() > 0)
        {
            foreach ($query->result() as $key => $value) {
            $regiones[$value->re_id]=$value->re_titulo;
         }
            return $regiones;//$query->result();
        }
        else
        {
            return false;
        }
    }
    
    public function provincias() {
        
        $query = $this->db->select('pr_id,pr_nombre,pr_region')
                ->get("provincia");
        $lq=$this->db->last_query();
        if($query -> num_rows() > 0)
        {
            foreach ($query->result() as $key => $value) {
            $provincias[$value->pr_id][$value->pr_region]=$value->pr_nombre;
         }
            return $provincias;//$query->result();
        }
        else
        {
            return false;
        }
    }
    
     public function comunas() {
        
        $query = $this->db->select('co_id,co_descripcion,co_pr')
                ->get("comuna");
        $lq=$this->db->last_query();
        if($query -> num_rows() > 0)
        {
            foreach ($query->result() as $key => $value) {
            $comunas[$value->co_id][$value->co_pr]=$value->co_descripcion;
         }
            return $comunas;//$query->result();
        }
        else
        {
            return false;
        }
    }
    
    public function app_var() {
        
        $query = $this->db->select('*')
                ->from("params")
                ->where("modulo","app");
        $query = $this -> db -> get();
        $lq=$this->db->last_query();
        if($query -> num_rows() > 0)
        {
            foreach ($query->result() as $key => $value):
                $app_vars[$value->param]=$value->val;
            endforeach;
            return $app_vars;//$query->result();
        }
        else
        {
            return false;
        }
    }
}
