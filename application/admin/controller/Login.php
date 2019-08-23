<?php
namespace app\admin\controller;

use app\admin\common\Base;
use think\Session;
use think\Request;
use app\admin\model\Admin;



class Login extends Base
{
    //渲染登录界面
    public function index(){
        $this->alreadyLogin();
        return $this->view->fetch('login');
    }
    //验证用户身份

    public function check(Request $request){

        //设置status
        $status = 0;

        //获取一下表单提交的数据，并保存在变量中
        $data = $request->param();
        $userName = $data['username'];
        $password = md5($data['password']);

        //在admin 表中进行查询，以用户为条件
        $map = ['username'=>$userName];
        $admin = Admin::get($map);
        if(is_null($admin)){
            $message = '用户名不正确！';
        }elseif($admin->password !=$password){
            $message = '密码不正确！';
        }else{
            $message = '验证通过，请点击进入后台！';
            $status = 1;
            $admin ->setInc('login_count');
            $admin ->save(['last_time'=>time()]);
            //将用户登录信息保存到session中，供其它控制进行登录，判断
            Session::set('user_id',$userName);
            Session::set('user_info',$data);
        }

        return ['status'=>$status,'message'=>$message];
    }
    //退出登录
    public function logout(){
        //删除当前用户Session值
        Session::delete('user_id');
        Session::delete('user_info');

        //执行成功，返回登录界面
        $this->success('注销成功,正在返回...','login/index');
    }
}