<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=  @$app["titulo_app"]."  "?><?= str_replace("_"," ",strtoupper(@$plug)) ?></title>

    <!-- Bootstrap core CSS -->
    <link rel='stylesheet' id='css.bs.wulf-css'  href='<?php echo $css; ?>bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='global_css_urnusdev'  href='<?php echo $css; ?>urnusdev/my-landing.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo $jquery; ?>'></script>
 <!--   <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>core.min.js'></script>
    <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>widget.min.js'></script>
    <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>tabs.min.js'></script>   --> 
  <!--  <script type='text/javascript' src='<?php echo $bootstrap_url; ?>js/bootstrap.min.js'></script> -->
    <?php 
    //jq_theme($jquery_themes_url, "dot-luv");    
    $data=$_ci_data["_ci_vars"];
    ?>

    <link href="<?php echo $fonts; ?>css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="<?php echo $css; ?>custom-landing.css" rel="stylesheet">
    <link href="<?php echo $css; ?>custom.css" rel="stylesheet">
    <link href="<?php echo $css; ?>icheck/flat/green.css" rel="stylesheet" />
    <!--[if lt IE 9]>
        <script src="../assets/<?php echo $js;?>ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body>
    <header style="text-align: center">
        <h1><?=  @$app["titulo_app"]."  "?><?= str_replace("_"," ",strtoupper(@$plug)) ?></h1>
        <div class="ln_solid"></div>
    </header>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                                <div class="x_title">
                                    <h2>BUSQUEDA</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    
                                    
                                    <?php $this->load->view("front/form_");?>
                                    
                                    
                                    
                                </div>
                            </div>
            </div>
        </div>

        
        
    </div>
    <script type='text/javascript' src='<?php echo $bootstrap_url; ?>js/bootstrap.min.js'></script>
    
    <!-- daterangepicker -->
    <script type="text/javascript" src="<?php echo $js;?>moment.min.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>datepicker/daterangepicker.js"></script>
    
    <script>
    $(document).ready(function () {
            $('#fini').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });
            $('#fterm').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
            });});
    </script>
</body>