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
    <link rel='stylesheet' id='global_css_urnusdev'  href='<?php echo $css; ?>urnusdev/my.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo $jquery; ?>'></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
 <!--   <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>core.min.js'></script>
    <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>widget.min.js'></script>
    <script type='text/javascript' src='<?php echo $jquery_ui_url; ?>tabs.min.js'></script>   --> 
  <!--  <script type='text/javascript' src='<?php echo $bootstrap_url; ?>js/bootstrap.min.js'></script> -->
    <?php 
    //jq_theme($jquery_themes_url, "dot-luv");    
    $data=$_ci_data["_ci_vars"];
    ?>

    <link href="<?php echo $fonts; ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $css; ?>animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo $css; ?>custom.css" rel="stylesheet">
    <link href="<?php echo $css; ?>icheck/flat/green.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo $js; ?>nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/<?php echo $js;?>ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="home" class="site_title"><span><?= $app["nombre_empresa"]?> <i class="fa fa-microphone"></i></span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?php echo $images;?>logo_.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Bienvenido,</span>
                            <h2><?php echo $nombre;?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>MENU</h3>
                            <?php $this->load->view('backend/administracion_menu',$data);?>
                        </div>
                        <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="e_commerce.html">E-commerce</a>
                                        </li>
                                        <li><a href="projects.html">Projects</a>
                                        </li>
                                        <li><a href="project_detail.html">Project Detail</a>
                                        </li>
                                        <li><a href="contacts.html">Contacts</a>
                                        </li>
                                        <li><a href="profile.html">Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="page_404.html">404 Error</a>
                                        </li>
                                        <li><a href="page_500.html">500 Error</a>
                                        </li>
                                        <li><a href="plain_page.html">Plain Page</a>
                                        </li>
                                        <li><a href="login.html">Login Page</a>
                                        </li>
                                        <li><a href="pricing_tables.html">Pricing Tables</a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                      <!--  <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a href="home/logout" data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a> -->
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

           
     <?php 
     
     if(isset($modulo)):
         $this->load->view('plugins/paneles/'.$plug."/".$modulo,$data);
     else:
     
     $this->load->view('backend/primario_contenedor',$data);
     
     endif;
     ?>  
        
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script type='text/javascript' src='<?php echo $bootstrap_url; ?>js/bootstrap.min.js'></script>
    <!--<script src="<?php echo $js;?>bootstrap.min.js"></script>-->

   
    <!-- bootstrap progress js -->
    <script src="<?php echo $js;?>progressbar/bootstrap-progressbar.min.js"></script>
    <script src="<?php echo $js;?>nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="<?php echo $js;?>icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="<?php echo $js;?>moment.min.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>datepicker/daterangepicker.js"></script>

    <script src="<?php echo $js;?>custom.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="<?php echo $js;?>excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="<?php echo $js;?>flot/jquery.flot.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>flot/date.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>flot/curvedLines.js"></script>
    <script type="text/javascript" src="<?php echo $js;?>flot/jquery.flot.resize.js"></script>
    <script>
        $(document).ready(function () {
            // [17, 74, 6, 39, 20, 85, 7]
            //[82, 23, 66, 9, 99, 6, 2]
            var data1 = [[gd(2012, 1, 1), 17], [gd(2012, 1, 2), 74], [gd(2012, 1, 3), 6], [gd(2012, 1, 4), 39], [gd(2012, 1, 5), 20], [gd(2012, 1, 6), 85], [gd(2012, 1, 7), 7]];

            var data2 = [[gd(2012, 1, 1), 82], [gd(2012, 1, 2), 23], [gd(2012, 1, 3), 66], [gd(2012, 1, 4), 9], [gd(2012, 1, 5), 119], [gd(2012, 1, 6), 6], [gd(2012, 1, 7), 9]];
            $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                data1, data2
            ], {
                series: {
                    lines: {
                        show: false,
                        fill: true
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 0.4
                    },
                    points: {
                        radius: 0,
                        show: true
                    },
                    shadowSize: 2
                },
                grid: {
                    verticalLines: true,
                    hoverable: true,
                    clickable: true,
                    tickColor: "#d5d5d5",
                    borderWidth: 1,
                    color: '#fff'
                },
                colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                xaxis: {
                    tickColor: "rgba(51, 51, 51, 0.06)",
                    mode: "time",
                    tickSize: [1, "day"],
                    //tickLength: 10,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Verdana, Arial',
                    axisLabelPadding: 10
                        //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
                },
                yaxis: {
                    ticks: 8,
                    tickColor: "rgba(51, 51, 51, 0.06)",
                },
                tooltip: false
            });

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }
        });
    </script>

   
    <!-- skycons -->
    <script src="<?php echo $js;?>skycons/skycons.js"></script>
    <script>
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>

    <script>
        NProgress.done();
    </script>
    <!-- /datepicker -->
    <!-- /footer content -->
</body>

</html>
