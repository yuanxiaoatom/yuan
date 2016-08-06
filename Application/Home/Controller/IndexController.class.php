<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends MyController {
    public function index(){
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