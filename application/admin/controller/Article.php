<?php
namespace app\admin\controller;
use app\admin\common\Base;

class Article extends Base
{
    public function index(){
        return $this->view->fetch('article_list');
    }
}