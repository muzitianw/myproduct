<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Cube - Bootstrap Admin Template</title>

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="/Public/Ljq/cube/css/bootstrap/bootstrap.min.css" />

    <!-- RTL support - for demo only -->
    <script src="/Public/Ljq/cube/js/demo-rtl.js"></script>
    <!--
    If you need RTL support just include here RTL CSS file <link rel="stylesheet" type="text/css" href="/Public/Ljq/cube/css/libs/bootstrap-rtl.min.css" />
    And add "rtl" class to <body> element - e.g. <body class="rtl">
    -->

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="/Public/Ljq/cube/css/libs/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Ljq/cube/css/libs/nanoscroller.css" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="/Public/Ljq/cube/css/compiled/theme_styles.css" />

    <!-- this page specific styles -->

    <!-- google font libraries -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link type="/Public/Ljq/cube/image/x-icon" href="favicon.png" rel="shortcut icon"/>

    <!--[if lt IE 9]>
    <script src="/Public/Ljq/cube/js/html5shiv.js"></script>
    <script src="/Public/Ljq/cube/js/respond.min.js"></script>
    <![endif]-->
    


</head>
<body id="login-page-full">
<div id="login-full-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
    
    <div id="login-box">
        <div id="login-box-holder">
            <div class="row">
                <div class="col-xs-12">
                    <header id="login-header">
                        <a href="<?php echo U('Index/index');?>" >
                            <div id="login-logo">
                                <img src="/Public/Ljq/cube/img/logo.png" alt=""/>首 页
                            </div>
                        </a>
                    </header>
                    <div id="login-box-inner">
                        <form role="form" action="index.html">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" placeholder="Email address">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <div id="remember-me-wrapper">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="checkbox-nice">
                                            <input type="checkbox" id="remember-me" checked="checked" />
                                            <label for="remember-me">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <a href="forgot-password-full.html" id="login-forget-link" class="col-xs-6">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="<?php echo U('User/registers');?>" ><p class="social-text">Or Register</p></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-success col-xs-12">Login</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="social-text">Or login with</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <button type="submit" class="btn btn-primary col-xs-12 btn-facebook">
                                        <i class="fa fa-facebook"></i> facebook
                                    </button>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <button type="submit" class="btn btn-primary col-xs-12 btn-twitter">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="login-box-footer">
            <div class="row">
                <div class="col-xs-12">
                    Do not have an account?
                    <a href="<?php echo U('User/Registers');?>">
                        Register now
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>

<div id="config-tool" class="closed">
    <a id="config-tool-cog">
        <i class="fa fa-cog"></i>
    </a>

    <div id="config-tool-options">
        <br/>
        <h4>Skin Color</h4>
        <ul id="skin-colors" class="clearfix">
            <li>
                <a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
                </a>
            </li>
            <li>
                <a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
                </a>
            </li>
            <li>
                <a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- global scripts -->
<script src="/Public/Ljq/cube/js/demo-skin-changer.js"></script> <!-- only for demo -->

<script src="/Public/Ljq/cube/js/jquery.js"></script>
<script src="/Public/Ljq/cube/js/bootstrap.js"></script>
<script src="/Public/Ljq/cube/js/jquery.nanoscroller.min.js"></script>

<script src="/Public/Ljq/cube/js/demo.js"></script> <!-- only for demo -->

<!-- this page specific scripts -->


<!-- theme scripts -->
<script src="/Public/Ljq/cube/js/scripts.js"></script>

<!-- this page specific inline scripts -->




</body>
</html>