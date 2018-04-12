<?php
namespace Admin\Controller;

use Think\Controller;

class DealersController extends CommonController{

	//显示经销商列表
	public function dealers_list(){
		$model = M("dealers");
		
		
		$tp = implode(',',(array)$_GET['type']);
		
		$search = I('get.search','','trim');
		
		
		if($tp && $search){
			$where = " display_status=1 and is_delete=1 and dealer_name like '%".$search."%' and type in ('".$tp."')";
		}else if($tp){
			$where = " display_status=1 and is_delete=1 and type in ('".$tp."')";
		}else if($search){
			
			$where = " display_status=1 and is_delete=1 and dealer_name like '%".$search."%'";
		}else{
			$where = ' display_status=1 and is_delete=1';
		}
	
		$total = $model->where($where)->count();
	
		//每页显示条数
		$pagesize = 15;
		//实例化分页类
		$opage = new \Think\Page($total,$pagesize);
		//查询
		$this->dealerList = $model->where($where)->limit($opage->firstRow,$opage->listRows)->select();
        $opage->setConfig('prev','上一页');
		$opage->setConfig('next','下一页');
		$opage->setConfig('first','首页');
		$opage->setConfig('last','尾页');
		$this->show = $opage->show();
		
		$arr = array(
			0=>'否',
			1=>'是'
		);
		$this->assign('arr',$arr);
		$this->display();
	}
	//显示\藏状态修改
	public function display_status(){
			$model = M("dealers");
			if($_GET['display_status']==1){
                $_GET['display_status']=0;
            }else{
                $_GET['display_status']=1;
            }

				$where = " id= ".$_GET['id'];
				$re = $model->where($where)->save($_GET);
				if($re){
					$this->success("设置成功",U("dealers/dealers_list"));
				}else{
					$this->error("设置失败");
				}
    }
    //隐藏方法
    public function undisplay(){
        $model = M("dealers");
        $dealerList = $model->where("display_status=0 and is_delete=1")->select();
        $this->assign("dealerList",$dealerList);
        $this->display();
    }

    //删除方法
    public function dealer_del(){
        $id = I('get.id',0,'');
        $model = M('dealers');
		if(is_array($id)){
			$where = " id in (".implode(',',$id).")";
			
		}else{
			$where = " id=".$id;
		}
       
        //判断是真删除还是伪删除
        if(true){
            $re = $model->where($where)->delete();
            if($re){
                $this->success("已彻底删除",U("dealers/dealers_list"));
            }else{
                $this->error('删除失败');
            }

        }else{
                 $where =  " id=".$id;
                 $data = $model->field('is_delete')->where($where)->find();
                 $data['is_delete']=0;
                 $re = $model->where($where)->save($data);
                 if($re){
                        $this->success('删除成功',U('dealers_list'));
                 }else{
                        $this->error('删除失败');
             }
        }
       
    }
	//添加经销商
	public function dealer_add(){
		
		if($_POST){
			
			$model = M('dealers');
			$_POST['subbranch']=$_POST['subbranch'][0];
			$re = $model->add($_POST);
			if($re){
				$this->success('添加成功',U('dealers_list'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->display();
		}
		
	}
	
	//批量添加经销商
	public function dealer_add_all(){
		//批量添加
		if($_POST){
			$model = M('dealers');
			//循环接收的数组
			foreach($_POST as $k=>$v){
				for($i=0;$i<count($v);$i++){
					//重新拼接数组
					$arr[$i][$k] = $v[$i];
				}
			}
			//循环新数组，写入数据库
			foreach($arr as $val){
				$re = $model->add($val);
			}		
			
			if($re){
					$this->success('添加成功',U('dealers_list'));
			}else{
					$this->error('添加失败');
			}
		}else{
			$this->display();
		}
		
	}
	
    public function dealer_save(){
		
        $id = I('get.id',0,'intval');
        $model = M("dealers");
        $where = " id = ".$id;
        $this->dealerList = $model->where($where)->find();
		if($_POST){
			$where = " id=".$_POST['id'];
			$_POST['subbranch']=$_POST['subbranch'][0];
			
			$re = $model->where($where)->save($_POST);
			
			if(re){
				$this->success('修改成功',U('dealers_list'));
			}else{
				$this->error('修改失败');
			}
		}else{
			 $this->display();
		}
       
    }
	
}
