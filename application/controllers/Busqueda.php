<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Busqueda
 *
 * @author urnusdev bsanchezdev@gmail.com
 * 
 */
class Busqueda extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data["app"]=$this->sis->app_var();
        $data["bootstrap_url"]=base_url()."public/bootstrap/";
        $data["jquery_url"]=base_url()."public/jquery/";
        $data["jquery_ui_url"]=base_url()."public/jquery/ui/";
        $data["jquery_themes_url"]=base_url()."public/jquery/themes/";
        $data["jquery"]=$data["jquery_url"]."jquery-1.11.3.min.js";
        $data["css"]=base_url()."public/css/";
        $data["fonts"]=base_url()."public/fonts/";
        $data["images"]=base_url()."public/images/";
        $data["js"]=base_url()."public/js/";
        $this->load->view("vista-busqueda",$data);
    }
}
