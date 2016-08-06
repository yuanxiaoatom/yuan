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
        $usermodel = D('User');
        //使用模型的validate方法，进行动态验证，
        if($usermodel->validate($usermodel->_login_validate)->create()){
            if($usermodel->login()){
                $this->redirect('UserCenter/index');
            }else{
                $this->showErr($usermodel->getError(),0);
            }
        }else{
            $this->showErr($usermodel->getError(),0);
        }
        
       
    }
}