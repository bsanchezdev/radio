<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Urnusdev_c_2
 *
 * @author nocturnus
 */
class Urnusdev_c_2{
    public $self=null;
            function __construct() {
                
            }
    public function route_panel($data,$CI) {
        $data["app"]=$CI->sis->app_var();
        $data["bootstrap_url"]=base_url()."public/bootstrap/";
        $data["jquery_url"]=base_url()."public/jquery/";
        $data["jquery_ui_url"]=base_url()."public/jquery/ui/";
        $data["jquery_themes_url"]=base_url()."public/jquery/themes/";
        $data["jquery"]=$data["jquery_url"]."jquery-1.11.3.min.js";
        $data["css"]=base_url()."public/css/";
        $data["fonts"]=base_url()."public/fonts/";
        $data["images"]=base_url()."public/images/";
        $data["js"]=base_url()."public/js/";
        //$data["plug"]="membresias";
        //$data["modulo"]="m_edit";
       // $data["membresia"]=$id_membresia;
        

        if($CI->session->userdata('logged_in'))
        {
            $session_data = $CI->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['nivel'] = $session_data['nivel'];
            $data['nombre'] = $session_data['nombre'];
            $data['plugins'] = $CI->plugins->obtener(true);
            
            $CI->load->view('backend/panel', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    
}
