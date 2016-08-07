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
            $this->showSuccess('信息发布成功，即将为您跳转到发布信息列表！',0,U('UserCenter/index'));
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
        $company = $user_companymodel->field()->where($where)->order(array('id'=>'desc','order'=>'desc'))->limit($start,$pageCount)->find();    
        $this->display();
	    $this->display();
	}
	//修改信息
	public function editMessage() {
	    $this->display();
	}
}
