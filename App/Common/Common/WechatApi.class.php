<?php
namespace Common\Common;

class WechatApi
{

    var $wx_AppId = "wxb7d83fb60cf30df5";
    var $wx_AppSecret = "ff7c28f62cfc3a9461d38b8c2f4e3688";
    var $wx_token = "aiwawaya2010";

    var $wx_authorize_url = "https://open.weixin.qq.com/connect/oauth2/authorize";
    var $wx_access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token";
    var $wx_refresh_token_url = "https://api.weixin.qq.com/sns/oauth2/refresh_token";
    var $wx_userinfo_url = "https://api.weixin.qq.com/sns/userinfo";
    var $wx_token_url = "https://api.weixin.qq.com/cgi-bin/token";
    var $wx_send_url = "https://api.weixin.qq.com/cgi-bin/message/custom/send";
    var $wx_user_get_url = "https://api.weixin.qq.com/cgi-bin/user/get";
    var $wx_media_get_url = "http://file.api.weixin.qq.com/cgi-bin/media/get";
    var $mp_userinfo_url = "https://api.weixin.qq.com/cgi-bin/user/info";
    

    public function get_token() {
        if (isset($_SESSION['access_token'])) {
            $access_token = $_SESSION['access_token'];
        } else {
            $para = array();
            $para["grant_type"] = "client_credential";
            $para["appid"] = $this->wx_AppId;
            $para["secret"] = $this->wx_AppSecret;
            $result = https_get($this->wx_token_url . $this->build_query_str($para));
            $data = json_decode($result);
            session('access_token', $data->access_token);
            session(array('name'=>'access_token','expire'=>7000));
            
            $access_token = $data->access_token;
        }
        return $access_token;
    }
    
    public function  sendTextMessage($openid, $content)
    {
        $msg = '{"touser":"' . $openid . '","msgtype":"text","text":{"content":"' . $content . '"}}';
        
        //$access_token = get_access_token($this->wx_token);
        $access_token = $this->get_token();
        if ($this->isSuccess($access_token)) {
            $url = $this->wx_send_url . "?access_token=" . $access_token;
            $result = $this->https_post($url, $msg);
            $final = json_decode($result);
            return $final;
        }
    }
    
    public function isSuccess($data)
    {
        if (!isset($data->errmsg)) {
            return true;
        } else {
            return false;
        }
    }
    
    function https_post($url, $data)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            return 'Error' . curl_error($curl);
        }
        curl_close($curl);
        return $result;
    }
    
    function https_get($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_POST, 0);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            return 'Error' . curl_error($curl);
        }
        curl_close($curl);
        return $result;
    }

    public function build_query_str($params)
    {
        $str = "?";
        $i = 0;
        $n = count($params) - 1;
        foreach ($params as $key => $val) {
            $str .=  $key . "=" . $val;
            if ($i < $n) {
                $str .= "&";
            }
            $i++;
        }
        return $str;
    }
}