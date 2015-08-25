<?php
function open($ruta,$flag="r")
{
    return fopen($ruta, $flag);
}