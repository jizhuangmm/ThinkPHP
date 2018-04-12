<?php
namespace Admin\Controller;

use Think\Controller;

class CodeController extends Controller
{

	/**
	 * 检测媒体渠道来源
	 */
	public function check_media()
	{
		$this->display();
	}

	/**
	 * IP监测
	 */
	public function check_IP()
	{
		$this->display();
	}

	/**
	 * VP监测
	 */
	public function check_Vp()
	{
		$this->display();
	}

	/**
	 * UV监测
	 */
	public function check_Uv()
	{
		$this->display();
	}

	/**
	 * 网络新增IP
	 */
	public function add_Ip()
	{
		$this->display();
	}

	/**
	 * 数据接口
	 */
	public function data_api()
	{
		$this->display();
	}
}