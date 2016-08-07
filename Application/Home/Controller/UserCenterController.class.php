<?php
namespace Home\Controller;
use Think\Controller;
class UserCenterController extends MyController{
    public  function __construct(){
        parent::__construct();
        if(empty($GLOBALS['user_info'])){
            $this->showErr('您尚未登录，没有权限进入',0,U('User/login'));
        }
    }
	//会员中心
	public function index(){
	    $this->member();
	}
	public function member(){
		$this->display();
	}
	//发布信息
	public function addMessage() {
	    $this->display();
	}
	//执行发布信息
	public function doAddMessage() {
	    $user_companymodel = D('User_company');
	    if($user_companymodel->create()){
            $user_companymodel->add();
            //content字段存入content表
            //拼接sql语句
            //执行sql语句
            $this->showSuccess('信息发布成功，即将为您跳转到信息列表！',0,U('UserCenter/messageList'));
        }
	}
	//信息列表
	public function messageList() {
	    $user_companymodel = D('User_company');
	    $where = 'is_del = 1 And user_id = '.$GLOBALS['user_info']['id'];
	    //分页
        $pageCount = 10;//设置一页的记录数量
        $count =  $user_companymodel->field()->where($where)->count();
        $totalPage = ceil($count/$pageCount); 
        $page = $_GET['page'];
        if($page<1){
            $page =1;
        }elseif ($page > $totalPage){
            $page = $totalPage;
        }
        $start = $pageCount*($page - 1);
        $messageList = $user_companymodel->field()->where($where)->order(array('id'=>'desc','order'=>'desc'))->limit($start,$pageCount)->find();    
        $this->display();
	}
	//修改信息
	public function editMessage() {	    
	    $messageId = $_GET['messageid'];
	    $user_companymodel = D('User_company');
	    $sql = 'SELECT uc.*,cc.* FROM `qifan_user_company` AS uc LEFT JOIN `qifan_company_content` AS cc ON uc.id = cc.company_id WHERE uc.is_del = 1 AND uc.id = '.$messageId.' AND uc.user_id = '.$GLOBALS['user_info']['id'];
	    $messageInfo = $user_companymodel->query($sql);
	    if(!empty($messageInfo)){
	        $this->display();
	    }else{
	        $this->showErr('非法请求',0,U('UserCenter/messageList'));
	    }
	}
	//保存修改信息
	public function doEditMessage() {
	    $user_companymodel = D('User_company');
	    if($user_companymodel->create()){
            $user_companymodel->save();
            //content字段存入content表
            //拼接sql语句
            //执行sql语句
            $this->showSuccess('信息发布成功，即将为您跳转到信息列表！',0,U('UserCenter/messageList'));
        }
	}
	public function deleteMessage() {
	    $messageId = $_GET['messageid'];
	    $sql = 'UPDATE `qifan_user_company` SET `is_del` = 1 WHERE id='.$messageId.' AND `user_id` = '.$GLOBALS['user_info']['id'];
	    if(M()->query($sql)){
	        $this->showSuccess('删除成功',1,U('UserCenter/messageList'));
	    }else{
	        $this->showErr('删除失败',1,U('UserCenter/messageList'));
	    }
	}
}
