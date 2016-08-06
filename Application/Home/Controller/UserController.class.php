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
				$user_name=I('post.user_name');
				$password=I('post.password');
				$userdata=$usermodel->field('id,active')->where("user_name='$user_name' and password='$password'")->find();
				if($userdata['is_effect']){
					$_SESSION['user_name']=$user_name;
					$_SESSION['id']=$userdata['id'];
					//if(I('post.remember')){
					$_SESSION['password']=$password;
					//}
					$this->redirect('Index/index');exit;
				}

		}else{
            $this->showErr($usermodel->getError(),0);
        }
    }
    public function autoCode(){
        $Verify =     new \Think\Verify();
        $Verify->fontSize = 16;
        $Verify->length   = 5;
        $Verify->useNoise = false;
        $Verify->imageW   = 172;
        $Verify->imageH   = 28;
        $Verify->entry();
    }
}