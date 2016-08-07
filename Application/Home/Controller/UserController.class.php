<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends MyController {
    public function index(){
        $this->login();
    }
    public function regist(){
        $this->display('regist');
    }
    public function doregist(){
        $usermodel = D('User');
        $_POST['password'] = md5(md5($_POST['password']));
        $_POST['rpassword'] = md5(md5($_POST['rpassword']));
        if($usermodel->create()){
            $usermodel->add();
            $this->showSuccess('注册账号成功，即将为您跳转到用户中心！',0,U('UserCenter/index'));
        }        
    }
    public function login(){
        if($_SESSION['password']){
            $usermodel=D('User');
            $user_name=$_SESSION['user_name'];
            $password=$_SESSION['password'];
            $userdata=$usermodel->field()->where("user_name='$user_name' and password='$password'")->find();
            if(!empty($userdata)){
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
				$password = md5(md5($password));
				$userdata=$usermodel->field()->where("user_name='$user_name' and password='$password'")->find();
				if($userdata['is_effect'] != 2){
					$_SESSION['user_name']=$user_name;
					$_SESSION['id']=$userdata['id'];
					//if(I('post.remember')){
					$_SESSION['password']=$password;
					//}
					$this->redirect('Index/index');exit;
				}else{
                    $this->showErr('此用户被禁用',0);
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