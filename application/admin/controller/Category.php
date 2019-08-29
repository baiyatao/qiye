<?php
namespace app\admin\controller;
use app\admin\model\Category as CategoryModel;
use app\admin\common\Base;
use http\Params;
use think\Request;
use think\Session;

class Category extends Base
{
    public function index(){
        //1.获取分类信息
        $cate = CategoryModel::getCate();

        //2.调用模板获取分页数据
        $cate_list = CategoryModel::order(['id'=>'desc'])->paginate(5);

        //3.获取记录数量
        $count = CategoryModel::count();

        //2.模板赋值
        $this->view->assign('cate',$cate);
        $this->view->assign('cate_list',$cate_list);
        $this->view->assign('count',$count);

        //3.渲染模板
        return $this->view->fetch('category_list');
    }
    public function edit(Request $request){
        //1.获取一下分类id
        $cate_id = $request->param('id');

        //2.查询要更新的数据
        $cate_now = CategoryModel::get($cate_id);

        //3.递归查询所有的分类信息
        $cate_level = CategoryModel::getCate();

        //4.模板 赋值
        $this->view->assign('cate_now',$cate_now);
        $this->view->assign('cate_level',$cate_level);

        //5.渲染模板
        return $this->view->fetch('cate_edit');
    }
    public function update(Request $request){
        //1.获取一下提交数据
        $data = $request->param();

        //2.更新操作
        $res = CategoryModel::update([
            'cate_name'=>$data['cate_name'],
            'cate_order'=>$data['cate_order'],
            'pid'=>$data['pid'],
        ],['id'=>$data['id']]);

        $status = 1;
        $message = '更新成功!';

        //3.如果没有成功
        if(is_null($res)){
            $status = 0;
            $message = '更新失败！';
        }
        return ['status'=>$status,'message'=>$message];
    }
    public function delete($id)
    {
        //1.删除以当前ID为父ID的所有子分类，注{只能删除一层子分类，需要调整}
        CategoryModel::destroy(function ($query) use ($id){
            $query->where(['pid'=>$id])->field('id');
        });

        //2.删除当前分类
        CategoryModel::destroy($id);


    }
    public function create(Request $request){
        //获取一下提交的数据
        $data = $request->param();


        //设置返回值
        $status =1;
        $message = '添加成功!';

        //2.添加数据到分类中
        $res = CategoryModel::create([
            'cate_name'=>$request->param('cate_name'),
            'pid'=>$request->param('pid')
        ]);

        //添加失败处理
        if(is_null($res)){
            $status = 0;
            $message = '添加失败！';
        }
        return ['status'=>$status,'message'=>$message,'res'=>$res];
    }
}
