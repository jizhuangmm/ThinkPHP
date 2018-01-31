<?php
namespace Face\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //调用人脸识别系统
        $this->display();
    }

    /**
     * @param $params
     * @param $appkey
     * @return string
     */
   public function getReturn(){

       // 图片base64编码
//       $path   = 'static/images/girl.jpg';
       $path   = I('post.imageUrl');
       $data   = file_get_contents($path);
       $base64 = base64_encode($data);

       // 设置请求数据
       $appkey = '3rUkr5s9xLIqoqXb';
       $params = array(
           'app_id'     => '1106710404',
           'image'      => $base64,
           'mode'       => '0',
           'time_stamp' => strval(time()),
           'nonce_str'  => strval(rand()),
           'sign'       => '',
       );
       $params['sign'] = $this->getReqSign($params, $appkey);

       // 执行API调用
       $url = C('FACE_URL');
       $response = $this->doHttpPost($url, $params);
       $this -> ajaxReturn($response);
//       echo $response;
   }

}