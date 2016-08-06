 <?php
// namespace Home\Model;
// use Think\Model;
// class UserModel extends Model{
//     //定义动态方式的验证规则
//     public $_login_validate=array(
//         array('user_name','require','管理员名称不能为空'),
//         array('password','require','密码不能为空'),
//         array('checkcode','require','验证码不能为空'),
//         //验证验证码是否输入正确，我们使用自定义函数来验证，
//         array('checkcode','check_verify','验证码输入不正确',1,'callback'),
//     );
//     //验证验证码是否正确的一个方法
//     protected function check_verify($code, $id = ''){
//         $verify = new \Think\Verify();
//         return $verify->check($code, $id);
//     }
//     //完成登录
//     public function login(){
//         //接收提交的管理员名称和密码
//         $admin_name = I('post.user_name');
//         $password = I('post.password');
//         //思路：根据管理员名称，查找出密码，使用该密码和输入的密码进行匹配，
//         $info = $this->where("user_name='$admin_name'")->find();//返回的是一行数据，也就是一维数组
//         if($info){
//             //有该用户信息，
//             //取出的密码要和输入的密码进行匹配
//             if(md5(md5($password))==$info['password']){
//                 //说明用户名和密码都是正确的，可以把用户名和用户的id写入到session里面
//                 $_SESSION['user_name']=$admin_name;
//                 $_SESSION['user_id']=$info['id'];
//                 return true;

//             }
//         }
//         $this->error='用户名或密码错误';
//         return false;
//     }
// }
 namespace Home\Model;
 use Think\Model;
 class UserModel extends Model{
     protected $_validate = array(
         array('user_name','require','用户名不能为空',1),
         array('user_name','','用户名已经被注册',1,'unique'),
         //array('user_name','checkname','用户名不能有非法字符',1,'callback'),
         array('password','6,12','密码长度为6-12',1,'length'),
         array('rpassword','password','两次输入的密码必须一致',1,'confirm'),
         array('email','','邮箱已经被注册',1,'unique'),
     );
     public $rules=array(
         array('user_name','require','用户名不能为空',1),
         array('password','6,12','密码长度为6-12',1,'length')
     );
     public $ru=array(
         array('password','6,12','密码长度为6-12',1,'length',2),
         array('rpassword','password','两次输入的密码必须一致',1,'confirm')
     );
 }
 ?>