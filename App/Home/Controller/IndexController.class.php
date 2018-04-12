<?php
namespace Home\Controller;

use Think\Controller;
//use Common\WechatSDK\WechatApi;
//use Common\WechatSDK\Wechat;
use Think\Cache\Driver\Memcache;
use Common\Common\WechatApi;

class IndexController extends Controller
{

    public function _initialize()
    {
        // parent::_initialize();
        $this->Wechat = new WechatApi();
    }

    public function index()
    {
        session('uid', 1);
        //session('access_token', 'yEHHhLfXm14vWoDbrvc2db0v9KypOVI3vJ53FwlVgXRqKuYWxHiK7pacWtfkJmdFbwk1CY-5yF-aS5_RoGhlnWlBAboAvmgcGLMF7YQtilfVRgyzNFTNaXCQiFDZVXzbMSZfAEAHNU');
        /* if (! session('access_token')) {
            $access_token_url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&';
            $appid = 'wxb7d83fb60cf30df5'; //asia58测试号
            //$appid = 'wx365732a95b5b1a0f'; //爱娃娃吖订阅号
            $secret = 'ff7c28f62cfc3a9461d38b8c2f4e3688';
            //$secret = 'f161ac0a7f68bb782258ece1f0982544';
            $url = $access_token_url . 'appid=' . $appid . '&secret=' . $secret;
            //echo $url;
            $result = https_get($url);
            $data = json_decode($result);
            //echo $result;
            session('access_token', $data->access_token);
        } */
        $this->pagetitle = '微信消息推送 - ';
        $this->display();
    }

    public function msg()
    {
        $mem = new Memcache();
        $mem->set('uid', 7);
        echo $mem->uid;
        // 这是使用了Memcached来保存access_token
        /* S(array(
            'type' => 'Memcache',
            'host' => 'localhost',
            'port' => '11211',
            'prefix' => 'think',
            'expire' => 0
        )); */
        
        // 开发者中心-配置项-AppID(应用ID)
        $appId = 'wxb7d83fb60cf30df5';
        // 开发者中心-配置项-AppSecret(应用密钥)
        $appSecret = 'ff7c28f62cfc3a9461d38b8c2f4e3688';
        // 开发者中心-配置项-服务器配置-Token(令牌)
        $token = 'aiwawaya2010';
        // 开发者中心-配置项-服务器配置-EncodingAESKey(消息加解密密钥)
        $encodingAESKey = '';
        
        // wechat模块 - 处理用户发送的消息和回复消息
        $wechat = new Wechat(array(
            'appId' => $appId,
            'token' => $token,
            'encodingAESKey' => $encodingAESKey
        )); // 可选

        // api模块 - 包含各种系统主动发起的功能
        $api = new WechatApi(array(
            'appId' => $appId,
            'appSecret' => $appSecret
        ));
        
        // 获取微信消息
        $msg = $wechat->serve();
        
        // 回复文本消息
        if ($msg->MsgType == 'text' && $msg->Content == '你好') {
            $wechat->reply("你也好！ - 这是我回复的额！");
        } else {
            $wechat->reply("听不懂！ - 这是我回复的额！");
        }
        
        // 主动发送
        $api->send($msg->FromUserName, '这是我主动发送的一条消息');
    }

    public function sendmsg()
    {
        $this->Wechat = new WechatApi();
        $data = I('post.');
        $openid = $data['openid'];
        $content = $data['content'];
        $success = $this->Wechat->sendTextMessage($openid, $content);
        if ($success) {
            $arr['success'] = 1;
            
            $this->ajaxReturn($arr);
        }
    }
}