<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"E:\www\qiye\public/../application/admin\view\banner\banner_edit.html";i:1567066243;s:53:"E:\www\qiye\application\admin\view\public\header.html";i:1566114787;s:54:"E:\www\qiye\application\admin\view\public\base_js.html";i:1566470892;}*/ ?>
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
    <body>
        <div class="x-body">
            <form class="layui-form" enctype="multipart/form-data" action="update" method="post">
                <div class="layui-form-item">
                    <label for="link" class="layui-form-label">
                        <span class="x-red">*</span>轮播图
                    </label>
                    <div class="layui-input-inline">
                      <div class="site-demo-upbar">
                        <input type="file" name="image" class="layui-upload-file" id="test">
                      </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">缩略图
                    </label>
                    <img id="LAY_demo_upload" width="400" src="/uploads/<?php echo $data['image']; ?>" height="400">
                </div>
                <div class="layui-form-item">
                    <label  class="layui-form-label">
                    </label>
                    （由于服务器资源有限，所以此处每次给你返回的是同一张图片)
                </div>
                <input type="hidden" id="id" name="id" value="<?php echo $data['id']; ?>">
                <div class="layui-form-item">
                    <label for="link" class="layui-form-label">
                        <span class="x-red">*</span>链接
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="link" name="link" required="" lay-verify="required" value="<?php echo $data['link']; ?>"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="desc" class="layui-form-label">
                        <span class="x-red">*</span>描述
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="desc" name="desc" required="" lay-verify="required" value="<?php echo $data['desc']; ?>"
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="" type="submit">
                        增加
                    </button>
                </div>
            </form>
        </div>
<script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
<script src="/static/admin/js/x-admin.js"></script>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/x-layui.js" charset="utf-8"></script>

<!--引入bootstrap-->
<link rel="stylesheet" type="text/css" href="/static/admin/lib/bootstrap/css/bootstrap.css" />
<script type="text/javascript" src="/static/admin/lib/bootstrap/js/bootstrap.js"></script>


    </body>

</html>