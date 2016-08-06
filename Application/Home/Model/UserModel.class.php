<?php
namespace Home\Model;
use Think\Model;
 class UserModel extends Model{
     protected $_validate = array(
         array('user_name','require','用户名不能为空',1),
         array('user_name','','用户名已经被注册',1,'unique'),
         array('password','6,12','密码长度为6-12',1,'length'),
         array('rpassword','password','两次输入的密码必须一致',1,'confirm'),
         array('email','','邮箱已经被注册',1,'unique'),
         array('mobile','','邮箱已经被注册',1,'unique'),
     );
     public $rules=array(
         array('user_name','require','用户名不能为空',1),
         array('password','6,12','密码长度为6-12',1,'length'),
         array('checkcode','require','验证码不能为空'),
         array('checkcode','check_verify','验证码输入不正确',1,'callback'),
     );
     public $ru=array(
         array('password','6,12','密码长度为6-12',1,'length',2),
         array('rpassword','password','两次输入的密码必须一致',1,'confirm')
     );
     protected function check_verify($code,$id='') {
         $verify = new \Think\Verify();
         return $verify->check($code,$id);
     }
 }
 ?>