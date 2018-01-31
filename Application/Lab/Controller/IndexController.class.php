<?php
namespace Lab\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    /**
     * @param $params
     * @param $appkey
     * @return string
     */
   public function getReturn(){

       // 待翻译文本
       $text = I('post.text');
       $lab = I('post.submit');
       $type='0';
       if ($lab=='日文'){
           $type='15';
       }else if($lab=='粤语'){
           $type='9';
       }


       // 设置请求数据
       $appkey = '4t4BYJ3vajE7x6ci';
       $params = array(
           'app_id'     => '1106715392',
           'type'       => $type,
           'text'       => $text,
           'time_stamp' => strval(time()),
           'nonce_str'  => strval(rand()),
           'sign'       => '',
       );
       $params['sign'] = getReqSign($params, $appkey);

       // 执行API调用
       $url = 'https://api.ai.qq.com/fcgi-bin/nlp/nlp_texttrans';
       $response = doHttpPost($url, $params);
       $re = json_decode($response,true);
       print_r($re['data']['trans_text']);
   }




}