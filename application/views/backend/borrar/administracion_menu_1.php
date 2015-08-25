

<div id="administracion">
    <!--<div class="alert alert-info">
        Sección de administración de los datos del sistema.
    </div>
    -->
    <ul>
        <?php //Cargar Plugins
    
//$plugins=    $this->plugins->obtener(true);
    $data=$_ci_data["_ci_vars"];
    if($plugins):        
    foreach ($plugins as $key => $value) {
        
        $data["plugin_nombre"]=$plugins[$key]->nombre;
        $data["plugin_activo"]=$plugins[$key]->plugin;
        $data["link_data"]=$plugins[$key]->plugin_front;
        $data["info_plugin"]=$plugins[0];
        
        foreach ($this->_ci_view_paths as $_ci_view_file => $cascade) {
            echo '<li>';
            if(file_exists($_ci_view_file."plugins\\".$plugins[$key]->plugin.".php"))
                {
                  $this->load->view("plugins/".$plugins[$key]->plugin,$data);
                }  else {
                    echo '<p>Modulo no disponible '.$data["plugin_nombre"].'</p>';    
                }
                echo "</li>";
        }
       
        
    }
    endif; //fin cargar plugins
    ?>
    </ul>
</div>