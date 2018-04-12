<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Cache\Driver\Memcache;
use Common\Common\WechatApi;

class CartoolController extends Controller{

	//预约试驾
	public function first_drive(){
			$model = M('firstdrive');
			$driveList = $model->select();
			
			$this->assign('driveList',$driveList);
			$this->display();
	}
	
	//删除已完成信息
	function drive_del(){
		$id = I('get.id',0,'intval');
		if($id){
			$model = M('firstdrive');
			$re = $model->delete($id);
			if($re){
				$this->success('删除成功',U('first_drive'));
			}else{
				$this->error('删除失败');
			}
		}
	}
	//经销商查询
	public function check_dealers(){
		$data = $this->ipjwd();
		$this->assign('data',$data);
		$this->display();
	}
	//获取经纬度
	function ipjwd() {
	  $getIp=$_SERVER["REMOTE_ADDR"];
	  if ($getIp=='127.0.0.1') {
	  $getIp='58.30.228.35';
		}
  $content = file_get_contents("http://api.map.baidu.com/location/ip?ak=RhXyFo0zdsGiiXSrD3VRYd2UjBGza1QE&ip={$getIp}&coor=bd09ll");
  $json = json_decode($content);
  //return $json;
	 $data='';
	 $data['ip']=$getIp;
	 $data['log']=$json->{'content'}->{'point'}->{'x'};//按层级关系提取经度数据
	 $data['lat']=$json->{'content'}->{'point'}->{'y'};//按层级关系提取纬度数据
	 $data['address']=$json->{'content'}->{'address'};//按层级关系提取address数据
	 return $data; 
	}
	public function dealers(){
		//查询经销商
		if($_POST){
			$model = M('dealers');
			$dealerName = trim($_POST['dealer_name']);
			$city  = trim($_POST['location']);
			$where = " dealer_name like '%".$dealerName."%' and city = '".$city."'";
			$dealers = $model->where($where)->select();
			
			$this->assign('dealers',$dealers);
			$arr = array(
					0=>'否',
					1=>'是'
				);
			$this->assign('arr',$arr);
		
			$this->display();
		}
		
	}
	//显示报价咨询
	public function offer_consulting(){
			$model = M('offerconsulting');
			$priceList = $model->select();
			$this->assign('priceList',$priceList);
			if($_POST){
				var_dump($_POST);
				die;
			}
		$this->display();
	}
	//删除报价咨询信息
	function offer_del(){
		$id = I('get.id',0,'intval');
		if($id){
			$model = M('offerconsulting');
			$re = $model->delete($id);
			if($re){
				$this->success('删除成功',U('offer_consulting'));
			}else{
				$this->error('删除失败');
			}
		}
	}
	// public function set_time(){
		// if($_POST){
			// $model = M('cartool');
			// unset($_POST['sub']);
			// $allowTime['allowtime'] = json_encode($_POST);
			// $re = $model->add($allowTime);
			// if($re){
				// $this->success('设置成功',U('first_drive'));
			// }else{
				// $this->error('设置失败');
			// }
		// }else{
			// $this->display();
		// }
	// }
	
}
