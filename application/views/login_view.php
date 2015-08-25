<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=  @$app["titulo_app"]?></title>

    <!-- Bootstrap core CSS -->

    <link href="<?php echo $css;?>bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo $fonts;?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $css;?>animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo $css;?>custom.css" rel="stylesheet">
    <link href="<?php echo $css;?>icheck/flat/green.css" rel="stylesheet">


    <script src="<?php echo $js;?>jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">
    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        
        <div id="wrapper">
           
            <div id="login" class="animate form">
                <section class="login_content">
                    <?= form_open('verifylogin'); ?>
                        <div class="css_logo" style="padding-bottom: 10px">
            <img style="width:100%;height: 200px" src="<?= base_url("/public/images/image_login.jpg")?>" width="5228" height="2362" alt="LOGO SOLVENCIA3"/>
            </div>
                        <div>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de usuario" required="" />
                            <?php echo form_error('username'); ?>
                        </div>
                        <div>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required="" />
                            <?php echo form_error('password'); ?>
                        </div>
                        <div>
                            
                            <input class="btn btn-default submit" type="submit" value="Login"/>
                          <!--  <a class="reset_pass" href="#">Lost your password?</a> -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                          <!--  <p class="change_link">New to site?
                                <a href="#toregister" class="to_register"> Create Account </a>
                            </p>-->
                            <div class="clearfix"></div>
                            <br />
                            <div>
                              <!--  <h1 style="letter-spacing: 0px;"><i class="glyphicon glyphicon-magnet" style="font-size: 26px;"></i>urnusdev Software</h1>-->

                                <p>©2015 ARCHI | Software desarrollado por IFweb & Urnusdev Ltda.</p>
                            </div>
                        </div>
                   <?php echo form_close();?>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
     
        </div>
    </div>

</body>

</html>