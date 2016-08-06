<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends MyController{
        //_initialize()方法在构造函数中自动执行。
        /*public  function __construct(){
                parent::__construct();
        }*/
        public function _initialize(){
                    //验证是否登录
                    //取出登录管理员的id
                    $admin_id = $_SESSION['admin_id'];
                    if($admin_id>0){
                            //已经登录，
                            return true;
                    }else{
                            $this->showErr('必须登录',0,U('Login/login'));
                    }
        }
}

?>