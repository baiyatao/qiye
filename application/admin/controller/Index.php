<?php
namespace app\admin\controller;

use app\admin\common\Base;

class Index extends Base
{
    public function index()
    {
        $this->idLogin();
        return $this->fetch();
    }
    public function welcome(){
        return $this->view->fetch('welcome');
    }
}
