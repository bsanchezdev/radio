<?php
function open($ruta,$flag="r")
{
    return fopen($ruta, $flag);
}

function base_uri($path=null)
{
    $dir=$_SERVER["SCRIPT_FILENAME"];
        $dir= dirname($dir);
        if(!isset($path)):
            return $dir;
            else:
      return $dir."/".$path;      
        endif;
    
}