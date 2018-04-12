<?php
namespace Admin\Controller;

use Think\Controller;

class ActivityController extends CommonController{

	/*
	* 显示活动列表
	*	
	*/
	public function activity_list(){
		
		$model =  M('activity');
		$where = " check_status=1 and display_status=1";
		$total = $model->where($where)->count();
		if(!empty($_GET['id'])){
				$fieldsList = $model->find($_GET['id']);
				$data['id'] = $fieldsList['id'];
				$data['display_status'] = $fieldsList['display_status'];
				$data[] = json_decode($fieldsList['fields'],true);
				$data[] = json_decode($fieldsList['content'],true);
				
			$this->assign('data',$data);
		}else{
			
			//每页显示条数
			$pagesize = 15;
			//实例化分页类
			$opage = new \Think\Page($total,$pagesize);
			//查询
			$this->actList = $model->where($where)->limit($opage->firstRow,$opage->listRows)->select();
			$opage->setConfig('prev','上一页');
			$opage->setConfig('next','下一页');
			$opage->setConfig('first','首页');
			$opage->setConfig('last','尾页');
			$this->show = $opage->show();
		}	
		
		
		$this->display();
	}
	
	
	//发布活动
	public function activity_add(){
		$model = M('activity');
		
		if($_POST){
				$_POST['new'] = 1;
				$re = $model->add($_POST);
				if($re){
					$this->success('添加成功',U('activity_list'));
				}else{
					$this->error('添加失败');
				}
				
		}else{
			$this->display();
		}
		
	}
	
	/*
	* 活动删除
	*	支持单条和批量删除
	*/
    function activity_del(){
        $model = M('activity');
         $id = I('get.id',0,'');
		//判断ID是不是数组
		if(is_array($id)){
			//批量删除
			$where = " id in(".implode(",",$id).")";
		}else{
			$where = " id=".$id;
		}
		//判断是否为自定义模板
		if($_GET['new']){
			$_GET['content']  = null;
			$re = $model->where($where)->save($_GET);
		}else{
			$re = $model->where($where)->delete();
		}
		
		if($re){
			//判断是否为自定义字段
			if($_GET['new']){
				$this->success('删除成功',U('activity_list?id='.$_GET['id']));
			}else{
				$this->success('删除成功',U('activity_list'));
			}
		}else{
			$this->error('删除失败');
		}
    }

	
	/*
	* 活动编辑
	*	
	*/
	public function activity_save(){
			$id = I('get.id',0,'intval');
			$model = M('activity');
			
			if($id){
				if($_GET['aaa']){
					$where = " id = ".$id;
					$info = $model->where($where)->find();
					$data[] = json_decode($info['fields'],true);
					$data[] = json_decode($info['content'],true);
					$data['id'] = $id;
					$this->assign('data',$data);
				}else{
					$where = " id = ".$id;
					$info = $model->where($where)->find();
					$this->assign('info',$info);
				}
				
			}
			//接收提交值
			if($_POST){
				
				//出去提交按钮
				unset($_POST['sub']);
				//更新为当前时间
				// $_POST['time'] = date('Y-m-d H:i:s');
				$where = " id=".$_POST['id'];
				if($_POST['val']){
					$_POST['content'] = json_encode($_POST['content']);
					$re = $model->where($where)->save($_POST);
				}else{
					$re = $model->where($where)->save($_POST);
				}
		
				if($re){
					//$this->success('修改成功',U('activity_list?id='.$_POST['id']));
					$this->success('修改成功',U('activity_list'));
				}else{
					$this->error('修改失败');
				}
			}else{
				$this->display();
			}
	}
	
	
	/*
	*	推荐图
	*	
	*/
	function activity_recommend(){
		if($_GET['id']){
			$model = M('activity');
			$where = " id=".$_GET['id'];
			$recommend = $model->field('recommend')->where($where)->find();
				if($recommend['recommend'] ==1 ){
					$this->error('不可重复推荐');
				}else{
					$_GET['recommend'] = 1;
					$re = $model->where($where)->save($_GET);
					if($re){
						if($_GET['new']){
							$this->success('推荐成功',U('activity_list?id='.$_GET['id']));
						}else{
							$this->success('推荐成功',U('activity_list'));
						}
						
					}else{
						$this->error('推荐失败');
					}
				}
		}
			
	}
	
	/*
	* 显示\隐藏状态修改
	*	设置活动信息的显示隐藏
	*/
	public function activity_dp(){
			$model = M("activity");
			if($_GET['display_status']==1){
                $_GET['display_status']=0;
            }else{
                $_GET['display_status']=1;
            }

				$where = " id= ".$_GET['id'];
				$re = $model->where($where)->save($_GET);
				if($re){
					if($_GET['new']){
						$this->success("设置成功",U("activity_list?id=".$_GET['id']));
					}else{
						$this->success("设置成功",U("activity_list"));
					}
				}else{
					$this->error("设置失败");
				}
    }
	
    /*
	* 隐藏方法
	*	显示被隐藏的活动信息
	*/
    public function undisplay(){
        $model = M("activity");
        $dpList = $model->where("display_status=0")->select();
        $this->assign("dpList",$dpList);
        $this->display();
    }
	
	//完成活动添加
	public function activity_finish_add(){
		$model = M('activity');
		if($_GET['id']){
			$field = $model->field('fields')->find($_GET['id']);
			$data = json_decode($field['fields'],true);
			$this->assign('data',$data);
		}
		if($_POST){
			
				if( $_POST['field']){
					$field = json_encode($_POST['field']);
					$_POST['fields'] = $field;
					$cont = json_encode($_POST['cont']);
					$_POST['content'] = $cont;
				}
				
				$_POST['check_status'] = 1;
				$_POST['display_status'] = 1;
				$re = $model->add($_POST);
				$id = $model->getLastInsID();
				
				if($re){
					$this->success('添加成功',U('activity_list?id='.$id));
				}else{
					$this->error('添加失败');
				}
				
		}else{
			$this->display();
		}
		
	}
	
	/*
	* 模板管理
	*	原有模板的字段和内容的修改
	*/
	public function template(){
		if($_GET['id']){
			$model = M('activity');
			$field  = $model->field('fields')->find($_GET['id']);
			$id  = $model->field('id')->find($_GET['id']);
			
			
			$data = json_decode($field['fields'],true);
			
			
			
			$this->assign('data',$data);
			$this->assign('id',$id);
		}
		if($_POST['id']){
			$model = M('activity');
			$id = $_POST['id'];
			$where = " id=".$id;
			$data['fields'] = json_encode($_POST['new']);
			
			$re = $model->where($where)->save($data); 	
			
			if($re){
				$this->success('修改成功',U('activity_list?id='.$id));
			}else{
				$this->error('修改失败');
			}
			
		}else{
			$this->display();
		}
		
		
	}
	
	/*
	* 模板下载
	*	下载切换模板
	*/
	public function tpl_download(){
		$file = $_GET['file'];
		$http  = new \Org\Net\Http();
		$time = date('Ymd His');
		$http->curlDownload($file,"./uploads/download/".$time);
		
		
	}
	/*
	* 自定义模板
	*	自定义字段和内容
	*/
	public function tpl_define(){
		if($_POST){
			$model = M('activity');
			unset($_POST['sub']);
			$data['fields'] = json_encode($_POST['new']);
			$data['content'] = json_encode($_POST['content']);
			$data['check_status'] = 1;
			$data['display_status'] = 1;
			$re = $model->add($data);
			$id = $model->getLastInsID();
			
			if($re){
				$this->success('更新成功',U('activity_list?id='.$id));
			}else{
				$this->error('更新失败');
			}
		
		}else{
			$this->display();
		}
		
		
	}
	
	//活动审核
	public function activity_audit(){
		$model = M('activity');
		
		if($_GET['id']){
			$id = I('get.id',0,'');
       
			//判断接收的ID是否是数组
			if(is_array($id)){
				//批量删除，拆分ID
				$where = " id in (".implode(',',$id).")";
				
			}else{
				$where = " id=".$id;
			}
			
			//判断是否放进草稿箱
			if($_GET['draft'] && $_GET['draft']==1){
					// $_GET['draft']=0;
					// $_GET['check_status']=0;
					$model->draft=0;
					$model->check_status=0;
					
			}else{
			
				if($_GET['check_status'] && $_GET['check_status']==1){
					// $_GET['check_status']=0;
					$model->check_status=0;
				}else{
					//$_GET['check_status']=1;
					$model->check_status=1;
					$model->display_status = 1;
				}
				
			}
			$re = $model->where($where)->save();
		 
			//判断成功与否
			if($re){
				$this->success('成功',U('activity/activity_list'));
			}else{
				$this->error('失败');
			}
			
	
		}else{
			$where = " check_status = 0 and display_status = 0";
			
			$total = $model->where($where)->count();
			//每页显示条数
			$pagesize = 5;
			//实例化分页类
			$opage = new \Think\Page($total,$pagesize);
			//查询
			$this->checkList = $model->where($where)->limit($opage->firstRow,$opage->listRows)->select();
			$opage->setConfig('prev','上一页');
			$opage->setConfig('next','下一页');
			$opage->setConfig('first','首页');
			$opage->setConfig('last','尾页');
			$this->show = $opage->show();
			$this->display();
		}
		
		
		
	}
	
	//草稿箱
	public function draft_box(){
		$model = M('activity');
        $where = " check_status=0 and draft=0";
        $draftList = $model->where($where)->select();
        $this->assign('draftList',$draftList);
		$this->display();
		
	}
	
	/*
	*	草稿箱内容删除
	*
	*/
    function draft_del(){
        $model = M('activity');
        $id = I('get.id',0,'');
		//判断ID是不是数组
		if(is_array($id)){
			//批量删除
			$where = " id in(".implode(",",$id).")";
		}else{
			$where = " id=".$id;
		}
		
		$re = $model->where($where)->delete();
		if($re){
			$this->success('删除成功',U('draft_box'));
		}else{
			$this->error('删除失败');
		}
        
    }

	/*
	*
	* 草稿箱内容编辑
	*	
	***/
    function draft_save(){
        $id = I('get.id',0,'intval');
        $model = M('activity');
	
        if($id){
            $draft=$model->find($id);
            $this->assign('draft',$draft);
        }
			
		if($_POST){
			
			$upload =new \Think\Upload();
			$upload->maxSize   =     3145728 ;// 设置附件上传大小
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->rootPath  =    './upload';    //根下面的public
			$upload->savePath  =      '/image/'; // 设置附件上传目录
			$upload->saveName  =    ['uniqid','pic'];//设置保存前缀
			$upload->subName   =    ['date','Y-m-d'];  //以日期方式保存
			$info=$upload->upload();
			$thumbVal = true;
			
			if($info) {
				if($thumbVal){
					//实例化缩率图类
					$thumb = new \Think\Image();
					//设置缩率图宽度
					$width = '80px';
					//设置缩率图高度
					$height = '50px';
					
					foreach($info as $file){
						//被裁剪图片路径
						$thumb_file = 'upload'.$file['savepath'].$file['savename'];
						//缩率图存放路径
						$thumb_path = 'upload'.$file['savepath'].'thumb'.$file['savename'];
					}
					
					$info_thumb =  $thumb->open($thumb_file)->thumb( $width, $height )->save( $thumb_path );
					//保存缩率图路径到POST中
					$_POST['thumb_img'] = $thumb_path;
				}
				
				//大图上传
				foreach($info as $file){
					$img = 'upload'.$file['savepath'].$file['savename'];
				}
					$_POST['image']=$img;
			}
			
			$where = " id=".$_POST['id'];
			$re = $model->where($where)->save($_POST);
				if($re) {
					//删除原图片
					$path = $_POST['simg'];
					if($info && file_exists($path)){
						@unlink($path);
					}
					
					 $info=['status'=>1, 'url'=>'draft_box', 'info'=>'编辑成功'];
				
				} 
				
				echo json_encode($info);
		}else{
				
				$this->display();
		}
    }
}
