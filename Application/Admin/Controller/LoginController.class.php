<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
        //显示出登录的界面
        public function login(){
                if(IS_POST){
                        $adminmodel = D('Admin');
                        //使用模型的validate方法，进行动态验证，
                        if($adminmodel->validate($adminmodel->_login_validate)->create()){
                               if($adminmodel->login()){
                                    $this->success('登录成功',U('Index/index'));exit;
                               }
                        }
                       $this->error($adminmodel->getError());  
                }
                $this->display();
        }
        //生成验证码的方法
        public function autoCode(){
                $config =    array( 
                 'fontSize'    =>    20,    // 验证码字体大小   
                 'length'      =>    4,     // 验证码位数   
                 'useNoise'    =>    false, // 关闭验证码杂点
                 'imageW'=>'145',
                 'imageH'=>'40'
                );
                $Verify =     new \Think\Verify($config);
                $Verify->entry();
        }
}
?>