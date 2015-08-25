<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author nocturnus
 */
class Menu {
    public $grupos_principales = array()    ;
    public $grupos_hijos = array()          ;
    public $data = array()                  ;
    public $menu_model = null;
    public function __construct($config = array())
	{
		$this->CI =& get_instance();
               $this->CI->load->model("plugins");
                $this->menu_model= $this->CI->plugins;
		log_message('info', 'Menu Class Initialized');
            $this->grupos_principales=$this->menu_model->obtener_grupos_principales();
       //     $this->grupos_hijos=$this->menu_model->obtener_grupos_hijos();
            $this->load_menu_data();
	}
        
        public function load_menu_data() {
            foreach ($this->grupos_principales as $key => $grupo_padre) {
              //  $this->data[$grupo_padre->grupo_menu]="";
                $ico=$this->menu_model->_iconos($grupo_padre->grupo_menu);
                foreach ($this->menu_model->_grupos($grupo_padre->grupo_menu) as $key => $sub_menu) {
                    $this->data[$grupo_padre->grupo_menu][]=$sub_menu;
                    $this->data[$grupo_padre->grupo_menu]["icono"]=$ico[0]->icono;
                    $this->data[$grupo_padre->grupo_menu]["nombre"]=$ico[0]->nombre;
                    $this->data[$grupo_padre->grupo_menu]["grupo_menu"]=$ico[0]->grupo_menu;
                }
            }
        }

}
