<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends MyController{
	//园区详情页
	public function gionArticle(){
	    $companyId = $_GET['company_id'];
	    $user_companymodel = D('User_company');
	    $sql = 'SELECT uc.*,cc.* FROM `qifan_user_company` AS uc LEFT JOIN `qifan_company_content` AS cc ON uc.id = cc.company_id WHERE uc.is_del = 1 AND uc.id = '.$companyId.' AND uc.class = 1';
	    $companyInfo = $user_companymodel->query($sql);
	    if(!empty($companyInfo)){
	        $this->display();
	    }
		$this->showErr('非法请求',0);
	}
	//厂房详情页
	public function rentalArticle(){
	    $factoryId = $_GET['factory_id'];
	    $user_companymodel = D('User_company');
	    $sql = 'SELECT uc.*,cc.* FROM `qifan_user_company` AS uc LEFT JOIN `qifan_company_content` AS cc ON uc.id = cc.company_id WHERE uc.is_del = 1 AND uc.id = '.$factoryId.' AND uc.class = 3';
	    $companyInfo = $user_companymodel->query($sql);
	    if(!empty($factoryInfo)){
	        $this->display();
	    }
	    $this->showErr('非法请求',0);
	}
	
}