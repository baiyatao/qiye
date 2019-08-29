<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"E:\www\qiye\public/../application/admin\view\category\cate_edit.html";i:1566877801;s:53:"E:\www\qiye\application\admin\view\public\header.html";i:1566114787;s:54:"E:\www\qiye\application\admin\view\public\base_js.html";i:1566470892;}*/ ?>
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
            <form class="layui-form">
                <div class="layui-form-item">
                    <label for="cid" class="layui-form-label">
                        ID
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cid" name="cid" required=""  value="<?php echo $cate_now['id']; ?>" disabled="" class="layui-input">
                    </div>
                    <input type="hidden" id="id" name="id" value="<?php echo $cate_now['id']; ?>">
                </div>
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>分类名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cate_name" name="cate_name" required="" lay-verify="required"
                        autocomplete="off" class="layui-input" value="<?php echo $cate_now['cate_name']; ?>">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="cname" class="layui-form-label">
                        <span class="x-red">*</span>排序
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="cate_order" name="cate_order" required="" lay-verify="required"
                               autocomplete="off" class="layui-input" value="<?php echo $cate_now['cate_order']; ?>">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">所属分类</label>
                    <div class="layui-input-inline" >
                        <select name="pid">
                            <option value="0">顶级分类</option>
                            <?php if(is_array($cate_level) || $cate_level instanceof \think\Collection || $cate_level instanceof \think\Paginator): $i = 0; $__LIST__ = $cate_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($cate_now['pid'] == $vo['id']): ?>
                                    <option value="<?php echo $vo['id']; ?>" selected><?php echo $vo['cate_name']; ?></option>
                                <?php else: ?>
                                     <option value="<?php echo $vo['id']; ?>" ><?php echo $vo['cate_name']; ?></option>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="save" lay-submit="" id="subbtn">
                        保存
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
        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
            


              
              
            });
        </script>
        <script>
            $(function(){
                $("#subbtn").on('click',function(){
                    $.ajax({
                        type:'POST',
                        url:"<?php echo url('category/update'); ?>",
                        data:$(".layui-form").serialize(),
                        dataType:"json",
                        success:function(data){
                            if(data.status == 1){
                                alert(data.message);
                                // window.location.href = "<?php echo url('index/index'); ?>";
                            }else{
                                alert(data.message);
                                // window.location.href = "<?php echo url('login/index'); ?>";
                            }
                        }
                    })
                })
            })
        </script>

    </body>

</html>