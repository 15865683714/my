<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <link href="/Public/Admin/login.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .login-bg{
            background: url(/Public/Admin/img/login-bg-4.jpg) no-repeat center center fixed;
            background-size: 100% 100%;
        }
    </style>
    <script src='/Public/Admin/js/jquery-3.1.1.min.js'></script>
</head>

<body class="login-bg">
    <div class="login-box">
        <header>
            <h1>后台管理系统</h1>
        </header>
        <div class="login-main">
      <form action="" class="form" method="post">
        <div class="form-item">
          <label class="login-icon">
            <i></i>
          </label>
          <input type="text" id='account' name="account" placeholder="这里输入登录名" required>
        </div>
                <div class="form-item">
                    <label class="login-icon">
                        <i></i>
                    </label>
                    <input type="password" id="password" name="password" placeholder="这里输入密码">
                </div>
                <div class="form-item verify">
                    <label class="login-icon">
                        <i></i>
                    </label>
                    <input type="text" id='verify' class="pull-left" name="code" placeholder="这里输入验证码">
                    <img class="pull-right" src="/index.php/Admin/Login/captcha" onclick="this.src='/index.php/Admin/Login/captcha/_/' +Math.random();">
                    <div class="clear"></div>
                </div>
        <div class="form-item">
          <button type="button" class="login-btn">
            登&emsp;&emsp;录
          </button>
        </div>
      </form>
            <div class="msg"></div>
    </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $('.login-btn').on('click',function(){
                if($('#account').val() == ''){
                    $('.msg').html('登录名不能为空');
                    return;
                }
                if($('#password').val() == ''){
                    $('.msg').html('密码不能为空');
                    return;
                }
                if($('#verify').val() == ''){
                    $('.msg').html('验证码不能为空');
                    return;
                }
                $('form').submit();
                //准备请求参数
                var data={
                    'account':$('#account').val(),
                    'password':$('#password').val(),
                    'code':$('#verify').val(),
                };
                //发送ajax请求
                $.ajax({
                    'url':'/index.php/Admin/Login/ajaxlogin',
                    'type':'post',
                    'data':data,
                    'dataType':'json',
                    'success':function(response){
                        if (response.code !=10000) {
                            //刷新验证码
                            alert(response.msg);
                            $('$code').attr('src','/index.php/Admin/Login/captcha/_/'+Math.random());

                        }else{
                            //登录成功 跳转到后台首页
                            location.href="/index.php/Admin/Index/index.html";
                        }
                    }
                })
            });
        })
    </script>
</body>
</html>