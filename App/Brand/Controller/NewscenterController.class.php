<?php
	namespace Brand\Controller;

	use Think\Controller;
	use Think\Cache\Driver\Memcache;
	use Common\Common\WechatApi;
	Class NewscenterController extends Controller{
		
		
		//新闻资讯列表
		public function index(){
				$model = M("information");
				//拼接where条件
				//$where = " check_status=1 and display_status=1 and date like '%"."'".$date."'"."%'";
				$where = " check_status=1 and display_status=1 ";
				 $pagesize = 6 ;
				 $page=0;
				//查询
				$infoList = $model->where($where)->limit($page,$pagesize)->select();
				$this->assign('infoList',$infoList);
				
				//最新动态
				$where = " check_status=1 and display_status=1 and new = 0";
				$this->newsList = $model->where($where)->limit($page,$pagesize)->select();
				//媒体中心
				$where = " check_status=1 and display_status=1 ";
				$this->mediaList = $model->where($where)->limit($page,$pagesize)->select();
			
				$this->display();
		}
		//动态查询经销商
		function dates(){
				if($_POST){
					$model = M("information");
					$year = I('post.year');
					$month = I('post.month');
					$home= I('post.home');
					$date  = $year.'-'.$month;
					$pagesize = 6 ;
					$page=0;
					//判断
					if($home =='新闻资讯'){
						$where = " check_status=1 and display_status=1 and date like '%".$date."%'";
						//$where = " check_status=1 and display_status=1 ";
						$infoList = $model->where($where)->limit($page,$pagesize)->select();
						$this->ajaxReturn($infoList);
					}
					if($home =='最新动态'){
						//最新动态	
						$where = " check_status=1 and display_status=1 and new = 0 and date like '%".$date."%'";
						$newsList = $model->where($where)->limit($page,$pagesize)->select();
						$this->ajaxReturn($newsList);
					}
					if($home == '媒体中心'){
						//媒体中心
						$where = " check_status=1 and display_status=1 and date like '%".$date."%'";
						$mediaList = $model->where($where)->limit($page,$pagesize)->select();
						$this->ajaxReturn($mediaList);
					}
					
				}
		}
		
		//详情页面
		public function detail(){
			//接收id
			$id = I('get.id',0,'intval');
			//判断id是否存在
			if($id){
				$model = M('information');
				//拼接where条件
				$where = " id = ".$id;
				//增加点击量
				$data = $model->field('click_rate')->where($where)->find();
				$data['click_rate'] = $data['click_rate']+1;
				 $re = $model->where($where)->save($data);
				//查询
				$this->detail = $model->where($where)->find();
				
			}
			
			$this->display();
		}	
			
		//追加新闻资讯
		
		// function getPage(){
			// $page = I('post.p');
			// $model = M('information');
			// $pagesize = 6 ;
			// $where = " check_status=1 and display_status=1 ";
			// $infoList = $model->limit($page,$pagesize)->where($where)->select();
			// $this->assign('infoList',$infoList);
		   // $this->display();

		// }
		
		// //追加最新动态
		// function getPage1(){
			// $page = I('post.p');
			// $model = M('information');
			// $pagesize = 6 ;
			// $where = " check_status=1 and display_status=1 and new = 0";
			// $newsList = $model->limit($page,$pagesize)->where($where)->select();
			// $this->assign('newsList',$newsList);
			// $this->display();

		// }
		
		// //追加媒体中心
		// function getPage2(){
			// $page = I('post.p');
			// $model = M('information');
			// $pagesize = 6 ;
			// $where = " check_status=1 and display_status=1 ";
			// $mediaList = $model->limit($page,$pagesize)->where($where)->select();
			// $this->assign('mediaList',$mediaList);
		   // $this->display();

		// }
	
		
		//最新动态
		public function recent(){
			
		}
		
		
		//新闻资讯
		public function news(){
			
		}
		
		//媒体中心
		public function mediacenter(){
			
			
		}
	}