<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Interchange
 *
 * @author nocturnus
 */
class Interchange extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper("urnusdev/archivos");
        $this->load->library('encrypt');
    }
    public function index($ruta) {
        $datos=  open($ruta);
    }
    public function i($arch="") {
        $share_path = base_uri("share/");
        
    //    $datos  =  open($share_path."20121122.log");
        $datos  = file_get_contents($share_path.$arch);
        $datos  = base64_encode($datos);
     //   echo $datos;
        ?>
<div id="output_">
    
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
$.post( "<?= base_url("/upload/catch_data")?>", { archivo_data: "<?= $datos ?>", archivo_nombre: "<?= $arch?>" },
function(data)
{
    $("#output_").html(data);
} );    
</script>
<?php
    }
}
