<?php
namespace app\admin\controller;
use app\admin\common\Base;

class Banner extends Base
{
    public function index(){
        return $this->view->fetch('banner_list');
    }

}
