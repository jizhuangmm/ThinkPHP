<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Cache\Driver\Memcache;
use Common\Common\WechatApi;

class BuycarserviceController extends Controller
{
	public function index()
	{
		$url="http://hao123.com";

		$rs=file_get_contents($url);

		 $s = '<div class="g-ib hao123-logo">
				<div id="indexLogo" class="hao123logo" monkey="hao123logo">
				<a class="card link link-hook" href="http://www.hao123.com/sethome" hidefocus="true" title="上网从hao123开始" target="">
				<img class="img-hook" width="168" height="60" src="https://gss1.bdstatic.com/5eN1dDebRNRTm2_p8IuM_a/res/img/richanglogo168_24.png" alt="上网从hao123开始">
				</a>
				</div>
				</div>';
	$res=str_replace($s,"1111",$rs);

		// preg_match_all($s,$rs,$t);

		echo "<pre>";
		print_r($res);
	}

	public function inde()
	{
		$url ='http://tech.firefox.huanqiu.com/16/0831/08/VWSRHATLBDU3EGXY.html';
		//$url = "http://s.jb51.net";
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,10);
		$dxycontent = curl_exec($ch);
		//echo $dxycontent; 
		libxml_disable_entity_loader(true);
        $ass = json_decode(json_encode(simplexml_load_string($dxycontent, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        echo "<pre>";
		print_r($ass);
	}
	public function FromXml($xml)
	{	
		if(!$xml){
			echo "xml数据异常！";
		}
        //将XML转为array
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $this->values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);		
		return $this->values;
	}
	//金融服务
    public function financial()
    {
        $this->display();
    }
    //保险服务
    public function insurance()
    {
        $this->display();
    }
    //安心二手车
    public function used_car()
    {
        $this->display();
    }

}