<?php
namespace app\admin\controller;
use app\admin\common\Base;
use app\admin\model\System as SystemModel;

use think\Request;

class System extends Base
{
    public function index(){
//        $data = SystemModel::get(1);
        $this->view->assign('system',$this->getSystem());
        return $this->view->fetch('system_list');
    }

    public function update(Request $request){
        //判断一下提交类型
        if($request->isAjax(true)){
            //获取提交数据
            $data = $request->param();

            //设置一下更新条件
            $map = ['is_update'=>$data['is_update']];

            //执行更新操作
//            if(is_null($data['is_close'])){
//                $data['is_close']=0;
//            }

            $res = SystemModel::update($data,$map);

            //设置更新返回信息
            $status = 1;
            $message = '更新成功！';

            //如果更新失败
            if(is_null($res)){
                $status = 0;
                $message = '更新失败！';
            }
        }
            return ['status'=>$status,'message'=>$message];


    }
    public function  updatet(Request $request){
        if($request->isAjax(true)){
            $data = $request->param();
//            $map = ['id'=>$data['id']];
//            $res = SystemModel::update($data,['id'=>1]);
//            $status = 1;
//            $message = '更新成功!';
//            if(is_null($res)){
//                $status = 0;
//                $message = '更新失败!';
//            }
        }
        //$status = 0;
        return ['status'=>1,'message'=>$data['is_close']];
    }
}
