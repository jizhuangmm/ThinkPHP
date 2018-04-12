<?php
namespace Admin\Controller;

use Think\Controller;
use Admin\Controller\CommonController;

class IndexController extends CommonController
{
	//显示后台主页
    public function index()
    {
        $this->display();
    }

}