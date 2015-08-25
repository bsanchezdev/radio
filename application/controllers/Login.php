<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    function __construct()
    {
        parent::__construct();

    }

    function index()
    {
       // $this->load->helper(array('form'));
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
        $this->load->view('login_view',$data);
    }
}