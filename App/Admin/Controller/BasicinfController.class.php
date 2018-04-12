<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Cache\Driver\Memcache;
use Common\Common\WechatApi;

class BasicinfController extends Controller
{

	//显示企业风采
	public function enterprise_style()
	{
		$this->display();
	}
	//显示品牌历程
	public function brand_history()
	{
		$this->display();
	}
	//显示联系我们
	public function contact_us()
	{
		$this->display();
	}
}
