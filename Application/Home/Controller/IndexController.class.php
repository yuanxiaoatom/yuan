<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends MyController {
    public function index(){
        echo 1111;
        $this->display('index');
    }
}