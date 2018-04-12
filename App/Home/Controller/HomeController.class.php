<?php
namespace Home\Controller;

use Think\Controller;
use Common\Common\WechatApi;

class HomeController extends Controller
{

    public function _initialize()
    {
        
        // 初始化微信
        $this->WeChat = new WechatApi();
        /*
         * $this->WeChat->wx_AppId = 'wxb7d83fb60cf30df5';
         * $this->WeChat->wx_AppSecret = 'ff7c28f62cfc3a9461d38b8c2f4e3688';
         * $this->WeChat->wx_token = 'aiwawaya2010';
         */
    }
}