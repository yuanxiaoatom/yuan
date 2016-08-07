<?php
namespace Home\Controller;
use Think\Controller;
class UserCenterController extends MyController{
	//会员中心
	public function index(){
	    $this->member();
	}
	public function member(){
		$this->display();
	}
	
}
