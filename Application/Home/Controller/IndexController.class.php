<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends MyController {
    public function index(){
        $user_companymodel = D('User_company');
        //首页产业园区数据
        $gion = $user_companymodel->field()->where("class = 1")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
       //开发区
        $zone = $user_companymodel->field()->where("class = 1 and class2 = 1")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //科技产业园
        $scienceIndustrialPark = $user_companymodel->field()->where("class = 1 and class2 = 2")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //文化产业园
        $culturalIndustryPark = $user_companymodel->field()->where("class = 1 and class2 = 3")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
       //楼宇经济
        $building = $user_companymodel->field()->where("class = 2")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //孵化器
        $incubator = $user_companymodel->field()->where("class = 2 and class2 = 4")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
       //创客
        $maker = $user_companymodel->field()->where("class = 2 and class2 = 5")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //写字楼
        $office = $user_companymodel->field()->where("class = 2 and class2 = 6")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //厂房出售
        $factory = $user_companymodel->field()->where("class = 3")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //厂房
        $factoryBuilding = $user_companymodel->field()->where("class = 3 and class2 = 7")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //仓库
        $warehouse = $user_companymodel->field()->where("class = 3 and class2 = 8")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //土地
        $land = $user_companymodel->field()->where("class = 4")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //住宅
        $housing = $user_companymodel->field()->where("class = 4 and class2 = 9")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //10商业
        $business = $user_companymodel->field()->where("class = 4 and class2 = 10")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //11工业
        $industry = $user_companymodel->field()->where("class = 4 and class2 = 11")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //12农业
        $farming = $user_companymodel->field()->where("class = 4 and class2 = 12")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        //13综合
        $complex = $user_companymodel->field()->where("class = 4 and class2 = 13")->order(array('order'=>'desc','id'=>'desc'))->limit(8)->find();
        $this->display();
    }
    //产业园区
    public function gion(){
    	$this->display();
    }
    //厂房租售
    public function rental(){
    	$this->display();
    }
}