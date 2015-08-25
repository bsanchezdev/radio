<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Login with CodeIgniter - Private Area</title>
    <link rel='stylesheet' id='css.bs.wulf-css'  href='<?php echo $css; ?>bootstrap.min.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo $jquery; ?>'></script>
    <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>core.min.js'></script>
    <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>widget.min.js'></script>
    <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>tabs.min.js'></script>    
    <script type='text/javascript' src='<?php echo $bootstrap_url; ?>js/bootstrap.min.js'></script>
    <?php 
    jq_theme($jquery_themes_url, "dot-luv");    
    $data=$_ci_data["_ci_vars"];
    ?>

</head>

<style>

    body{
      /*  padding-top: 10px; */
     /*   background-color: #575757; */
    }
    .ui-widget-content {
    border: 1px solid #000;
    background: #1B1E41;
    color: #D9D9D9;
    }

    #tabs
    {
    width: 25%;/* 335px*/
    float: left;
    height: 800px;
    font-size: 12px;
    border-radius: 0px;
    }
    
    #admin_contenedor
    {
    float: left;
    display: block;
    padding: 0px 0px 0px 10px;
   /* border: 1px solid;*/
    height: 800px;
    width: 75%;
    position: relative;
    background-color: beige;
    }
    
    .btn-gym-panel
    {width: 100%; color: black !important;}
    
    
    a {
        color: #ACBFD2;
        text-decoration: none;
    }
   /* .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus
    {
        color: #F5F5F5;
        background-color: #575757;
    } */
</style>
<body style="">


<div id="tabs">
  <ul>
    <li><a href="#administracion">Administración</a></li>
    <li><a href="#tabs-2">M1</a></li>
    <li><a href="#tabs-3">M2</a></li>
    <li><a href="#tabs-4">M3</a></li>
    <li><a href="/logout">Logout</a></li>
  </ul>
 <?php $this->load->view('backend/administracion_menu',$data);?>

      
</div>
<?php $this->load->view('backend/administracion_contenedor',$data);?>  
<script>
  $(function() {
    $( "#tabs" ).tabs({
      collapsible: true
    });
  });
  </script>
</body>