<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:61:"E:\www\qiye\public/../application/admin\view\login\login.html";i:1566198276;s:53:"E:\www\qiye\application\admin\view\public\header.html";i:1566114787;s:54:"E:\www\qiye\application\admin\view\public\base_js.html";i:1566470892;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        X-admin v1.0
    </title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/admin/css/x-admin.css" media="all">
</head>

    <body style="background-color: #393D49">
        <div class="x-box">
            <div class="x-top">
                <i class="layui-icon x-login-close">
                    &#x1007;
                </i>
                <ul class="x-login-right">
                    <li style="background-color: #F1C85F;" color="#F1C85F">
                    </li>
                    <li style="background-color: #EA569A;" color="#EA569A">
                    </li>
                    <li style="background-color: #393D49;" color="#393D49">
                    </li>
                </ul>
            </div>
            <div class="x-mid">
                <div class="x-avtar">
                    <img src="./images/logo.png" alt="">
                </div>
                <div class="input">
                    <form class="layui-form">
                        <div class="layui-form-item x-login-box">
                            <label for="username" class="layui-form-label">
                                <i class="layui-icon">&#xe612;</i>
                            </label>
                            <div class="layui-input-inline">
                                <input type="text" id="username" name="username" required="" placeholder="username" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item x-login-box">
                            <label for="pass" class="layui-form-label">
                                <i class="layui-icon">&#xe628;</i>
                            </label>
                            <div class="layui-input-inline">
                                <input type="password" id="password" name="password" required=""  placeholder="******" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" id="loginbtn">
                            <button  class="layui-btn" lay-filter="save" lay-submit="" type="button" id="loginbtn1">
                                登 录
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
<script src="/static/admin/js/x-admin.js"></script>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/x-layui.js" charset="utf-8"></script>

<!--引入bootstrap-->
<link rel="stylesheet" type="text/css" href="/static/admin/lib/bootstrap/css/bootstrap.css" />
<script type="text/javascript" src="/static/admin/lib/bootstrap/js/bootstrap.js"></script>
        <p style="color:#fff;text-align: center;">Copyright © 2017.Company name All rights X-admin </p>


        <script>
            layui.use(['form'],
            function() {
                $ = layui.jquery;
                var form = layui.form(),
                layer = layui.layer;

                $('.x-login-right li').click(function(event) {
                    color = $(this).attr('color');
                    $('body').css('background-color', color);
                });

                //监听提交
                // form.on('submit(save)',
                // function(data) {
                //     console.log(data);
                //     layer.alert(JSON.stringify(data.field), {
                //       title: '最终的提交信息'
                //     },function  () {
                //         location.href = "./index.html";
                //     })
                //     return false;
                // });


            });

        </script>

    <script>
        $(function(){
            $("#loginbtn1").on('click',function(){
                $.ajax({
                    type:'POST',
                    url:"<?php echo url('login/check'); ?>",
                    data:$(".layui-form").serialize(),
                    dataType:"json",
                    success:function(data){
                    if(data.status == 1){
                        alert(data.message);
                        window.location.href = "<?php echo url('index/index'); ?>";
                    }else{
                        alert(data.message);
                        window.location.href = "<?php echo url('login/index'); ?>";
                    }
                }
                })
            })
        })
    </script>
    </body>

</html>