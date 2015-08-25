<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Urnusdev_c_3
 *
 * @author nocturnus
 */
class Urnusdev_c_3 {
    
    public function fecha_ing_a_esp($fecha=null)
    {
        if(isset($fecha)):            
        $fecha_array=  explode("-", $fecha);
        return $fecha_array[2]."-".$fecha_array[1]."-".$fecha_array[0];
        else:
            return false;
        endif;
    }
    
    public function fecha_esp_a_ing($fecha=null)
    {
        if(isset($fecha)&&$fecha!=""):
         $fecha_array=  explode("-", $fecha);
        return $fecha_array[2]."-".$fecha_array[1]."-".$fecha_array[0];
        else:
            return false;
        endif;
    }
    
}
