<?php
namespace app\admin\model;
use think\Model;
use think\model\Collection;

class Category extends Model
{
    protected $insert = [
        'cate_order'=>0
    ];
    //创建一个静态方法getCate,来获取分类信息
    //$pid：当前分类的父id
    //$result :引用返回值
    //$blank :设置分类之的显示提示
    public static function getCate($pid=0,&$result=[],$blank=0){
        //1.分类表查询：PID
        $res = self::all(['pid'=>$pid]);

        //2.自定义分类名称前面的提示信息
        $blank +=2;

        //遍历分类表
        foreach ($res as $key=>$value){

            //3-1,自定义分类名称的显示格式
            $cate_name = '|--'.$value->cate_name;
            $value->cate_name = str_repeat('&nbsp;',$blank).$cate_name;
            $result[] = $value;
            //3-3关键，将当前记录的id,做为下一级分类的父id,$pid,继续递归调用本方法
            self::getCate($value->id,$result,$blank);

        }

        //返回查询结果，调用结果集类make方法打包当前结果，转为二维数组返回

        return Collection::make($result)->toArray();
    }
}
