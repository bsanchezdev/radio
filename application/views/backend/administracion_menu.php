<?php
if(isset($modulo)):
$display="display: block;";    
else:
$display="display: none;";    
endif;
    
?>
<ul class="nav side-menu">
        <?php   
    $data=$_ci_data["_ci_vars"];
    $data["display"]=$display;
//Cargar Plugins
    $this->urnusdev_c_1->genera_menu_A($plugins,$_ci_view_file,$data);
//fin cargar plugins
        ?>
</ul>
