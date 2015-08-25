<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user','',TRUE);
    }

    function index()
    {
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
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $data["bootstrap_url"]=base_url()."/public/bootstrap/";
/*
        $this->form_validation->set_rules('username', 'Usuario', 'trim|required|min_length[5]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|matches[passconf]|md5');
        $this->form_validation->set_rules('passconf', 'Confirmar Contraseña', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
*/

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('username', 'Usuario', 'trim|required|min_length[5]|valid_email');
        $this->form_validation->set_rules('password', 'Contraseña', 'trim|required|md5|min_length[5]');
        /*
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database|passcheck');
*/

        if($this->form_validation->run() == FALSE)
        {

            //Field validation failed.  User redirected to login page

            $this->load->view('login_view',$data);
        }
        else
        {
           // redirect('home', 'refresh');
            IF($this->check_database($this->input->post('password'))) {
                //   echo $this->db->last_query();

                //Go to private area
                redirect('/home', 'refresh');
            }ELSE{
                //Usuario o Passwd Incorrecto
                $this->form_validation->set_message('password', 'Nombre de usuario o password incorrecto');
                $this->load->view('login_view',$data);}
        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        //query the database
        $result = $this->user->login($username, $password);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username,
                    'nivel' => $row->nivel,
                    'nombre' => $row->nombre
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('passcheck', 'Nombre de usuario o password incorrecto');
            return false;
        }
    }
}