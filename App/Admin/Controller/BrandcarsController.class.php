<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Cache\Driver\Memcache;
use Common\Common\WechatApi;

class BrandcarsController extends Controller
{

	//数据导入  
	/*
	*完成车型车系信息数据的批量导入等功能的设置
	*/
	public function data_import()
	{
		
		$this->display();
	}
	
	//显示车型分类
	/*
	*车型分类主要是完成车型分类的增删改查等操作
	*/
	public function vehicle_class()
	{
		$this->display();
	}
	
	//显示车系导航
	/*
	*完成车系导航栏目的设置，主要是全系车型->车型列表等设置。
	*/
	public function paul_nav()
	{
		$this->display();
	}
	
	//显示精品管理
	/*
	*精品分类、精品列表、预订单
	*/
	public function best_manage(){
		$this->display();
	}
}
