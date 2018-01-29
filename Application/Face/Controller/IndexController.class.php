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
   private function getReturn(){
       // 图片base64编码
       $path   = 'https://image.baidu.com/search/detail?ct=503316480&z=0&ipn=false&word=%E9%AB%98%E6%B8%85%E5%A3%81%E7%BA%B8%20%E7%BE%8E%E5%A5%B3&step_word=&hs=2&pn=21&spn=0&di=40799163900&pi=0&rn=1&tn=baiduimagedetail&is=0%2C0&istype=2&ie=utf-8&oe=utf-8&in=&cl=2&lm=-1&st=-1&cs=443718640%2C4214776948&os=3143183869%2C4090677163&simid=0%2C0&adpicid=0&lpn=0&ln=3972&fr=&fmq=1389861203899_R&fm=&ic=0&s=undefined&se=&sme=&tab=0&width=&height=&face=undefined&ist=&jit=&cg=wallpaper&bdtype=0&oriquery=%E9%AB%98%E6%B8%85%E5%A3%81%E7%BA%B8&objurl=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2F2%2F587c39fe7d98d.jpg&fromurl=ippr_z2C%24qAzdH3FAzdH3Fooo_z%26e3Botg9aaa_z%26e3Bv54AzdH3Fowssrwrj6_kt2_8da9ad_c_z%26e3Bip4s&gsm=0&rpstart=0&rpnum=0';
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
       $url = 'https://api.ai.qq.com/fcgi-bin/face/face_detectface';
       $response = $this->doHttpPost($url, $params);
       echo $response;
   }


    // getReqSign ：根据 接口请求参数 和 应用密钥 计算 请求签名
    // 参数说明
    //   - $params：接口请求参数（特别注意：不同的接口，参数对一般不一样，请以具体接口要求为准）
    //   - $appkey：应用密钥
    // 返回数据
    //   - 签名结果
    function getReqSign($params /* 关联数组 */, $appkey /* 字符串*/)
    {
        // 1. 字典升序排序
        ksort($params);

        // 2. 拼按URL键值对
        $str = '';
        foreach ($params as $key => $value)
        {
            if ($value !== '')
            {
                $str .= $key . '=' . urlencode($value) . '&';
            }
        }

        // 3. 拼接app_key
        $str .= 'app_key=' . $appkey;

        // 4. MD5运算+转换大写，得到请求签名
        $sign = strtoupper(md5($str));
        return $sign;
    }

    // doHttpPost ：执行POST请求，并取回响应结果
    // 参数说明
    //   - $url   ：接口请求地址
    //   - $params：完整接口请求参数（特别注意：不同的接口，参数对一般不一样，请以具体接口要求为准）
    // 返回数据
    //   - 返回false表示失败，否则表示API成功返回的HTTP BODY部分
    function doHttpPost($url, $params)
    {
        $curl = curl_init();

        $response = false;
        do
        {
            // 1. 设置HTTP URL (API地址)
            curl_setopt($curl, CURLOPT_URL, $url);

            // 2. 设置HTTP HEADER (表单POST)
            $head = array(
                'Content-Type: application/x-www-form-urlencoded'
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $head);

            // 3. 设置HTTP BODY (URL键值对)
            $body = http_build_query($params);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $body);

            // 4. 调用API，获取响应结果
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_NOBODY, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
            if ($response === false)
            {
                $response = false;
                break;
            }

            $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if ($code != 200)
            {
                $response = false;
                break;
            }
        } while (0);

        curl_close($curl);
        return $response;
    }

}