<?php
namespace Admin\Controller;
use Think\Controller;
class MyController extends Controller{
public function showErr($msg,$ajax=0,$jump='',$stay=0,$from="")
{
    if($ajax==1)
    {
        $result['status'] = 0;
        $result['info'] = $msg;
        $result['jump'] = $jump;
        header("Content-Type:text/html; charset=utf-8");
        echo(json_encode($result));exit;
    }
    else
    {

        $this->assign('page_title',$GLOBALS['lang']['ERROR_TITLE']." - ".$msg);
        $this->assign('msg',$msg);
        if($jump=='')
        {
            $jump = $_SERVER['HTTP_REFERER'];
        }
        if(!$jump&&$jump=='')
            $jump = APP_ROOT."/";
            $this->assign('jump',$jump);
            $this->assign("stay",$stay);
            $this->display("error");
            exit;
    }
}

//显示成功
public function showSuccess($msg,$ajax=0,$jump='',$stay=0,$from="")
{
    if($ajax==1)
    {
        $result['status'] = 1;
        $result['info'] = $msg;
        $result['jump'] = $jump;
        header("Content-Type:text/html; charset=utf-8");
        echo(json_encode($result));exit;
    }
    else
    {

        if($jump=='')
        {
            $jump = $_SERVER['HTTP_REFERER'];
        }
        if(!$jump&&$jump=='')
            $jump = APP_ROOT."/";
            $this->assign('jump',$jump);
            $this->assign("stay",$stay);
            $this->display("success");
            exit;
    }
}
}