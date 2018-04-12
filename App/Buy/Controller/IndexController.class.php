<?php
namespace Buy\Controller;

use Think\Controller;

class IndexController extends Controller
{

  // 预约试驾
  public function appointment(){
	   $province=M("province")->order('id')->select();
		$this->assign("province_id",$province);
	  //车型id
		$carType = M('auto_modelid');
		$pagesize = 12 ;
		$page=0;
		//查询
		$carList = $carType->limit($page,$pagesize)->select();
		$this->assign('carList',$carList);
		
	//车型img
		$carImg = M('auto_model');
		$pagesize = 12 ;
		$page=0;
		//查询
		$car = $carImg->limit($page,$pagesize)->select();
		$this->assign('car',$car);
		
  if($_POST['test_person'] && $_POST['province'] && $_POST['city'] && $_POST['mobile'] ){
			$model = M('firstdrive');
			$re = $model->add($_POST);
			if($re){
				$this->success('成功',U('appointment'));
			}else{
				$this->error('失败');
			}
			
	}else{
		
		$this->display();
	}
	  
    
  }
  // 经销商查询
  public function dealer_query(){
	$province=M("province")->order('id')->select();
	$this->assign("province_id",$province);
	
	$model = M('dealers');
	$dealerName = I('post.dealername');
	
	// $city = I('post.city');
	// $where = " dealer_name like '%".$dealerName."%' and city= '".$city."'";
	$where = " dealer_name like '%".$dealerName."%'";
	$pagesize = 3 ;
	$page=0;
	$dealers =  $model ->where($where)->limit($page,$pagesize)->select();
	$num = count($dealers);
	$this->assign('num',$num);
	$this->assign('dealers',$dealers);
    $this->display();
	
  }
  
   function dealer(){
		$model = M('dealers');
		$dealerName = I('post.dealername');
		$city = I('post.city');
		$where = " dealer_name like '%".$dealerName."%' and city like '%".$city."%'";
		//$where = " dealer_name like '%".$dealerName."%'";
		$dealers =  $model ->where($where)->select();
		$num = count($dealers);
		
		$this -> ajaxReturn($dealers);
   }
  
  //查询省市
   public function province(){
    $provincecode=I("post.province");
	$where = " provincecode = ".$provincecode;
    $province=M("city")->where($where)->order('id')->select();
    $this -> ajaxReturn($province);
  }
  //根据定位查询经销商
  public function dealersel(){
    $city=I("post.city");
	$where = " city like '%".$city."%'";
	$model = M('dealers');
    $dealerall=$model->where($where)->order('id')->select();
    $this -> ajaxReturn($dealerall);
  }

  // 报价咨询
  public function ask_price(){
	  $province=M("province")->order('id')->select();
		$this->assign("province_id",$province);
	  //车型id
		$carType = M('auto_modelid');
		$pagesize = 12 ;
		$page=0;
		//查询
		$carList = $carType->limit($page,$pagesize)->select();
		$this->assign('carList',$carList);
		
	//车型img
		$carImg = M('auto_model');
		$pagesize = 12 ;
		$page=0;
		//查询
		$car = $carImg->limit($page,$pagesize)->select();
		$this->assign('car',$car);
		
	if($_POST['buy_name'] && $_POST['province'] && $_POST['city'] && $_POST['contact_way']){
		
			$model = M('offerconsulting');
			$re = $model->add($_POST);
			if($re){
				$this->success('成功',U('ask_price'));
			}else{
				$this->error('失败');
			}
			
			
	}else{
		$this->display();
	}
	
    
  }
  // 购车计算器
  public function buy_calculator()
  {
    $this->display();
  }
  // 电商中心
  public function e_commerce()
  {
    $this->display();
  }
}