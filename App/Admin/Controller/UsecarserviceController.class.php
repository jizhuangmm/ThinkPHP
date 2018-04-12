<?php
namespace Admin\Controller;

use Think\Controller;

class UsecarserviceController extends Controller
{

	/**
	 * 保养服务
	 */
	public function upkeep()
	{
		$this->display();
	}

	/**
	 * 维修服务
	 */
	public function maintenance()
	{
		$this->display();
	}

	/**
	 * 延保服务
	 */
	public function extended_warranty()
	{
		$this->display();
	}

	/**
	 * 紧急救援
	 */
	public function rescue()
	{
		$this->display();
	}
}