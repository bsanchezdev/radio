<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Simple Login with CodeIgniter - Private Area</title>
    <link rel='stylesheet' id='css.bs.wulf-css'  href='<?php echo $bootstrap_url; ?>css/bootstrap.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo $jquery; ?>'></script>
    <script type='text/javascript' src='<?php echo $bootstrap_url; ?>js/jquery/bootstrap.min.js'></script>
<style>
    .cel-tit
    {
        border-right: 3px solid #D4D4D8;
        min-height: 80px;
        line-height: 70px;
        text-align: center;
        border-bottom: 1px solid #d4d4d8;
    }
    body {    padding-top: 90px;}.panel-login {    border-color: #ccc;    -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);    -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);    box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);}.panel-login>.panel-heading {    color: #00415d;    background-color: #fff;    border-color: #fff;    text-align:center;}.panel-login>.panel-heading a{    text-decoration: none;    color: #666;    font-weight: bold;    font-size: 15px;    -webkit-transition: all 0.1s linear;    -moz-transition: all 0.1s linear;    transition: all 0.1s linear;}.panel-login>.panel-heading a.active{    color: #029f5b;    font-size: 18px;}.panel-login>.panel-heading hr{    margin-top: 10px;    margin-bottom: 0px;}



</style>
</head>
<body style="background-color: rgb(197, 207, 219);">
<div class="container-fluid">
<div class="row" style="background-color: rgb(239, 240, 240); min-height: 80px;">
    <div class="col-lg-2 col-md-2 cel-tit">Titulo App</div>
    <div class="col-lg-2 col-md-2 cel-tit"><a class="btn-link">Modulo Ventas</a></div>
    <div class="col-lg-2 col-md-2 cel-tit">b</div>
    <div class="col-lg-2 col-md-2 cel-tit">c</div>
    <div class="col-lg-2 col-md-2 cel-tit">d</div>
    <div class="col-lg-2 col-md-2 cel-tit">e</div>
</div>
<div class="row">
    <h1>Home</h1>
    <h2>Welcome <?php echo $username; ?>!</h2>
    <a href="home/logout">Logout</a>
</div>

</div>
<div class="container">        <div class="row">            <div class="col-md-6 col-md-offset-3">                <div class="panel panel-login">                    <div class="panel-heading">                        <div class="row">                            <div class="col-xs-6">                                <a href="#" class="active" id="login-form-link">Login</a>                            </div>                            <div class="col-xs-6">                                <a href="#" id="register-form-link">Register</a>                            </div>                        </div>                        <hr>                    </div>                    <div class="panel-body">                        <div class="row">                            <div class="col-lg-12">                                <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">                                    <div class="form-group">                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">                                    </div>                                    <div class="form-group">                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">                                    </div>                                    <div class="form-group text-center">                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">                                        <label for="remember"> Remember Me</label>                                    </div>                                    <div class="form-group">X</div>


</body>
</html>