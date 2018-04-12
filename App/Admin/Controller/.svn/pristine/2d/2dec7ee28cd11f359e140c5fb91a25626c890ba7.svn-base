<?php

	namespace Admin\Controller;
	use Think\Controller;
	class CommonController extends Controller{
		/**
			*初始化
			*_initialize()
		**/
			function _initialize(){
				if(!session('?admin')){
					$this->error("请登录",U("Login/login"));
				}
			}
	}