<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Cache\Driver\Memcache;
use Common\Common\WechatApi;

class MaterialController extends Controller
{

	//显示分类
	public function classification()
	{
		$this->display();
	}
	//显示应用
	public function application()
	{
		$this->display();
	}
	//显示列表
	public function lists(){
		$this->display();
	}
}
