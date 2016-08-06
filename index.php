<?php
//定义项目层序路径
define('APP_PATH', './Application/');
//开启调试模式
define('APP_DEBUG', true);
//让入口文件直路由到Admin模块里面的Index控制器里面的index方法
$_GET['m']='Admin';
$_GET['c']='Index';
$_GET['a']='index';
//引入入口文件
require 'ThinkPHP/ThinkPHP.php';