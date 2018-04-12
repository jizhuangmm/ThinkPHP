<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Cache\Driver\Memcache;
use Common\Common\WechatApi;

class LoginController extends Controller
{
	/**
	 * 显示登陆页
	 * @return [type] [description]
	 */
    public function login()
    {
        $this->display();
    }

    /**
     * 验证登陆
     * validation_login
     */
    public function validation_login(){
            $admin = M('adminmanage');
			//接收账号密码
            $username = I('post.username','','trim');
            $password = md5(I('post.password','','trim'));
            //where条件
            $where='username=\''.$username.'\' and passwd=\''.$password.'\'';
			//查询
            $user = $admin->field('aid,username')->where($where)->find();
			//判断查询结果
            if($user){
                //创建SESSION，保持登录状态
                session('admin',$user);
                //成功
                $this->success('登录成功',U('Index/index'),3);
		
    	//$this->success("登陆成功",U("Index/index"),3);
    	// $this->error("密码错误",U('Login/login'),10);
			}else{
				$this->error("登录失败！",U("Login/login"));
		
			}
	
	}
	function loginOut(){
            //销毁session
            session('[destroy]');
            //重定向
            $this->redirect('Login/login');
        }
	
}