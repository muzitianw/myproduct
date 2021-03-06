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
                        <form role="form" action="User/regi_add" method="post">
                            <!--<div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" placeholder="昵称" name="username">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" type="text" placeholder="验证邮箱" name="email">
                            </div>-->
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" placeholder="手机号" name="phone" id="phone" maxlength="11">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="登录密码" name="password" id="password" maxlength="16">
                            </div>
                            <!--<div class="input-group">-->
                                <!--<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>-->
                                <!--<input type="password" class="form-control" placeholder="确认登录密码" name="repassword">-->
                            <!--</div>-->
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="text" placeholder="验证码" style="width:58%;" name="code" id="code" maxlength="6">
                                <button type="button" class="btn btn-success" style="height: 46px;padding: 10px 10px;margin-top: 0px;" id="getcode">获取验证码</button>
                            </div>
                            <div id="remember-me-wrapper">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="checkbox-nice">
                                            <input type="checkbox" id="terms-cond" name="xieyi" checked="checked" />
                                            <label for="terms-cond">
                                                我同意并遵守互联网相关法律法规，以及本网站的相关规定。
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-box-body clearfix">
                                <div class="alert alert-success" style="display: none" id="error_one">
                                    <i class="fa fa-check-circle fa-fw fa-lg"></i>
                                    <strong>Well done!</strong>
                                    <span>You successfully read this important alert message.</span>
                                </div>

                                <div class="alert alert-danger" style="display: none" id="error_two" >
                                    <i class="fa fa-times-circle fa-fw fa-lg"></i>
                                    <strong>Oh snap!</strong>
                                    <span>Change a few things up and <a href="#" class="alert-link">try submitting again</a>.</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-success col-xs-12" id="form_submit">完成注册</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="<?php echo U('User/logins');?>"><p class="social-text">已注册去登录</p></a>
                                </div>
                            </div>
                        </form>
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

    <script type="text/javascript">

        $("#phone").focus(function() {
            $("#phone").val('');
            $('#error_one').hide();
            $('#error_two').hide();
        });

        $("#phone").blur(function() {     //文本框失去焦点
            checkphone();
        });

        function show_error(num,show_str){
            $('#error_one span').html('');
            $('#error_two span').html('');
            $('#error_one').hide();
            $('#error_two').hide();
            if(num==66){
                $('#error_one').show();
                $('#error_one span').html(show_str);
            }else{
                $('#error_two').show();
                $('#error_two span').html(show_str);
            }
        }

        function checkphone(){
            var cphone = $("#phone").val();
            //var cphone_str = /^(13[0-9]|15[0|1|2|3|5|6|7|8|9]|18[0-9]|14[5|7]|17[0|3|7|6|8])\d{8}$/;    //验证手机号码
            var cphone_str = /^1[34578]\d{9}$/;    //验证手机号码
            if(cphone.length != 11){
                show_error(44,'手机号位数不正确');
            }else if(!cphone_str.test(cphone)){
                show_error(44,'手机号格式不正确');
            }else{
                phoneexist(cphone);
            }
        }

        function phoneexist(cphone){
            $.ajax({
                type:"POST",
                dataType:"JSON",
                data:"phone="+cphone,
                url:"/User/phone_exist",
                success:function(msg){
                    if(msg.status == 1){
                        show_error(66,msg.content);
                    }else{
                        show_error(44,msg.content);
                    }
//                    if(msg==22){
//                        show_error(44,'手机号已经存在了!');
//                    }else if(msg==44){
//                        show_error(44,'DB is wrong');
//                    }else if(msg==66){
//                        show_error(66,'手机号正确！');
//                    }else{
//                        show_error(44,'Unknown error');
//                    }
                },
                error: function (xmlHttpRequest, error) {
                    show_error(44,'AJAX is wrong');
                }
            });
        }

        $("#password").focus(function() {
            $("#password").val('');
        });

        $("#password").blur(function() {     //文本框失去焦点
            checkpassword();
        });

        function checkpassword(){
            //var cpassword_str = '/(?=^.*?[a-z])(?=^.*?[A-Z])(?=^.*?\d)^(.{6,16})$/';    //密码里面必须包含一个小写字母，一个大写字母一个数字且6到16的长度
            var cpassword = $("#password").val();
            var c_num   = /^[0-9]+$/;      //数字[0-9]+
            var c_zimu  = /^[a-zA-Z]+$/;       //字母[a-zA-Z]+
            var c_zifu  = /^(?=^.*?[^0-9a-zA-Z])^(.{6,16})$/;  //除了字母数字外的其他字符

            //alert(c_zifu.test(cpassword));
            if(cpassword.length < 6){
                show_error(44,'密码不能少于6位');
            }else if(cpassword.length > 16){
                show_error(44,'密码不能多于16');
            }else if(c_num.test(cpassword)){
                show_error(44,'密码不能只是数字');
            }else if(c_zimu.test(cpassword)){
                show_error(44,'密码不能只是字母');
            }else if(!c_zifu.test(cpassword)){
                show_error(44,'密码里添加特殊字符会更安全');
            }else{
                show_error(66,'密码安全');
            }
        }
        $("#code").focus(function() {
            $("#code").val('');
        });

        $("#code").blur(function() {     //文本框失去焦点
            checkcode();
        });
        function checkcode(){
            var ccode = $("#code").val();
            var c_code   = /^[0-9]+$/;
            if(ccode.length != 6){
                show_error(44,'验证码应为六位数字');
            }else if(!c_code.test(ccode)){
                show_error(44,'验证码必须是数字');
            }else{
                show_error(66,'验证码安全');
            }
        }

        $("#getcode").click(function(){
            //alert('fsfsf1111');
            show_error(66,'验证码发送成功！');
        });

        $("#form_submit").click(function(){
            var IsCheck=$("#terms-cond");
            if(IsCheck.is(":checked")){
                alert(11111);
//                var cphone      = $("#phone").val();
//                var cpassword   = $("#password").val();
//                var ccode       = $("#code").val();
//                $.ajax({
//                    type:"POST",
//                    dataType:"JSON",
//                    data:"phone="+cphone+"&password="+cpassword+"&code="+ccode,
//                    url:"/User/regi_add",
//                    success:function(msg){
//                        alert(msg);
//                    },
//                    error: function (xmlHttpRequest, error) {
//                        show_error(44,'AJAX is wrong');
//                    }
//                });
            }else{
                alert(22222);
            }
            //show_error(66,'确认注册！');
        });

    </script>
    <!--<script type="text/javascript">

        //验证码生成
        var captcha_img = $('#captcha-container').find('img');
        var verifyimg = captcha_img.attr("src");
        captcha_img.click(function(){
            if( verifyimg.indexOf('?')>0){
                $(this).attr("src", verifyimg+'&random='+Math.random());
            }else{
                $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
            }
        });

        var last_times = 0; //倒计时时间 单位S
        var static_countdowns_times = 60;//倒计时开始时间
        function countdown() {
            if (0 >= last_times) {
                $("#getCode").css("background-color","#17a2d5");
                $("#getCode").html('获取验证码');
                return;
            }
            str_text = last_times--;
            str_text += '秒后重试';
            $('#getCode').html(str_text);
            setTimeout("countdown()", 1000);
        }


        $("#reg_btn").click(function(){
            var username = $('input[name=username]').val();
            var password = $('input[name=password]').val();
            var repass = $('input[name=repass]').val();
            var phoneCode=$('input[name=phoneCode]').val();
            var check_re =  check_form(username,password,repass);
            if(phoneCode.length==0){
                show_error('手机验证码不能为空');
                return false;
            }
            if(check_re){
                $.ajax({
                    url:'doRegister',
                    data:'username='+username+'&password='+password+'&phoneCode='+phoneCode,
                    type:'post',
                    dataType:'json',
                    success:function(re){
                        //alert(re);
                        var code = "<?php echo I('get.code');?>";
                        if(re.status==0){
                            show_error(re.content);
                        }else{
                            $('#error_msg_p').html('');
                            location.href="<?php echo U('WebSso/recommendPerson');?>?code="+code;
                        }
                    }

                })
            }


        })


        $("#getCode").click(function(){
            if(0 >=last_times){
                var username = $('input[name=username]').val();
                var password = $('input[name=password]').val();
                var repass = $('input[name=repass]').val();
                var phoneCode=$('input[name=phoneCode]').val();
                var imgCode = $('input[name=imgcode]').val();
                var check_re = check_form(username,password,repass);
                if(check_re){
                    $.ajax({
                        url:"<?php echo U('Sso/sendRegisterSmsNew');?>",
                        data:'username='+username+'&imgCode='+imgCode+'&type=pic',
                        type:'post',
                        dataType:'json',
                        success:function(re){
                            if(re.status==0){
                                $('#captcha-container').find('img').click();
                                show_error(re.content);
                            }else if(re.status == 2){
                                $('#captcha-container').show();
                                show_error(re.content);
                            }else{
                                $("#getCode").css("background-color","#3e3e3e");
                                last_times = static_countdowns_times;
                                countdown();
                            }
                        }
                    })
                }
            }else{
                show_error('请勿多次点击');
            }
        })


        function check_form(username,password,repass){
            var pattern =/^1[34578]\d{9}$/;
            var match = /^(?![^0-9]+$)(?![^a-zA-Z]+$).+$/;
            var type = $("input[type='checkbox']").is(':checked');
            if(!pattern.test(username) || username.length==0){
                show_error('手机号格式不正确');
                return false;
            }
            if(password.length<6 || password.length==0){
                show_error('密码格式错误');
                return false;
            }
            if(!match.test(password)){
                show_error("新密码由六位以上英文数字组成");
                return false;
            }
            if(password != repass){
                show_error('两次密码输入不一致');
                return false;
            }
            if(!type){
                show_error('请阅读黑马贷《用户协议》');
                return false;
            }
            show_error("");
            return true;
        }


        function show_error(str) {
            $('#error_msg_p').html(str);

        }





    </script>-->


</body>
</html>