<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends MyController {
    public function index(){
        echo 1111;
        $this->display('login');
    }
    public function regist(){
        $this->display('regist');
    }
    public function doregist(){
        $usermodel = D('User');
        if($Usermodel->create()){
            $Usermodel->add();
            $this->showSuccess('注册账号成功，即将为您跳转到用户中心！',0,U('UserCenter/index'));
        }        
    }
    public function login(){
        echo 1111;
        if($_SESSION['password']){
            $usermodel=D('User');
            $user_name=$_SESSION['user_name'];
            $password=$_SESSION['password'];
            if($userdata=$usermodel->field()->where("user_name='$user_name' and password='$password'")->find()){
                $this->redirect('Index/index');exit;
            }
        }
        $this->display('login');
    }
    public function dologin(){
        $usermodel=D('User');
		if($usermodel->validate($usermodel->rules)->create()){
				$username=I('post.username');
				$password=I('post.password');
				$userdata=$usermodel->field('id,active')->where("username='$username' and password='$password'")->find();
				if($userdata['active']){
					$_SESSION['username']=$username;
					$_SESSION['id']=$userdata['id'];
					//if(I('post.remember')){
					$_SESSION['password']=$password;
					//}
					$cartmodel = D('Cart');
					$cartmodel->cookie2db();
					$this->success('登录成功',U('Index/index'));exit;
				}

		}else{
            $this->showErr($usermodel->getError(),0);
        }
        
       
    }
}