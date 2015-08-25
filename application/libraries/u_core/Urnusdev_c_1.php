<?php
/**
 * Description of Urnusdev_c_1
 *
 * @author nocturnus
 */
class Urnusdev_c_1 {
    public $menu_model=null;
    public $menu=null;
            function __construct() {
                $this->CI =& get_instance();
                $this->CI->load->model("plugins");
                $this->load=$this->CI->load;
              //  $this->CI->load->model("menu");
                $this->menu= $this->CI->menu;
                $this->menu_model= $this->CI->plugins;
		log_message('info', 'Menu Class Initialized');
    }
    
    public function genera_menu_A($plugins,$_ci_view_file,$data)
    {
        
      if($plugins):   
        foreach ($this->menu->data as $menu_id => $menu_):
         ?>
    <li>
    <a><i class="fa <?php echo $menu_["icono"];?>"></i> <?php echo $menu_["grupo_menu"];?> <span class="fa fa-chevron-down"></span></a>
    <ul class="nav child_menu" style="<?php echo $data["display"];?>">
    <?php
            foreach ($menu_ as $key => $value) {
   
                if(@file_exists($_ci_view_file."plugins/".$value->plugin.".php")):
                    echo "<li>";
                     $data["plugin_nombre"] =$value->nombre;
                     $data["plugin_activo"] =$value->plugin;
                     $data["link_data"]     =$value->plugin_front;
                     $data["info_plugin"]   =$value;
                        $this->crear_opcion_menu($data["info_plugin"], $data["plugin_nombre"]);
                    echo "</li>";
                else:
                    if(isset($value->nombre)):
                    echo "<li>";
                    echo '<p>Modulo no disponible '.$value->nombre.'</p>';  
                    echo "</li>";   
                    endif;
                     
                endif;
   
            }
            ?>
    </ul>
    </li>
    <?php
        endforeach;
  
        endif;
    }    
    
    
    protected function crear_opcion_menu($info_plugin, $plugin_nombre)
    {
    ?>
    <a class="" href="<?php echo base_url();?>modu/load/<?php echo $info_plugin->plugin?>/<?php echo $info_plugin->plugin_front?>" style="border: 1px solid; margin: 0px 5px 5px 0px;">
    <i class="fa <?php echo $info_plugin->subicono;?>"></i>
    <?php echo $plugin_nombre;?>
    </a>
    <?php    
    }
}
