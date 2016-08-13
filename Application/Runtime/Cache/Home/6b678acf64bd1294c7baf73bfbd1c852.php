<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>园区详情页</title>
<link href="/Public/Home/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/Home/css/gion.css" rel="stylesheet" type="text/css" />
<script src="/Public/Home/js/jquery-1.9.1.min.js"></script>

</head>

<body>
<div class="top">
	<p class="login"><span>登陆</span><span>注册</span>  <span class="span-right-border">我的订单</span></p>
</div>

<div class="box">
	<div class="logo-serch">
		<div class="logo"><img src="/Public/Home/images/logo.png"></div>
        <div class="address"><p>北京</p><p>[切换城市]</p></div>
        <div class="serch"><input type="text" name="serch"><input type="button" value="搜索"></div>
    </div>
    <div class="clear"></div>
    <div class="nav-type">
    	<div class="type">全部服务分类</div>
        <div class="nav">
        	<ul>
            	<li><a href="">首页</a></li>
                <li><a href="">企业资讯</a></li>
                <li><a href="">产业园区</a></li>
                <li><a href="">楼宇经济</a></li>
                <li><a href="">厂房租售</a></li>
                <li><a href="">土地</a></li>
                <li><a href="">购买服务</a></li>
                <li><a href="">税务筹划</a></li>
                <li><a href="">行业新闻</a></li>
                <li><a href="">问答</a></li>
                <li><a href="">在线查询</a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <!--主体部分-->
    <div class="content">
    	<div class="title-content">某某某产业园</div>
        <!--图片-->
        	<div class="ban" id="demo1">
                <div class="ban2" id="ban_pic1">
                    <div class="prev1" id="prev1"><img src="/Public/Home/images/index_tab_l.png" width="28" height="51"  alt=""/></div>
                    <div class="next1" id="next1"><img src="/Public/Home/images/index_tab_r.png" width="28" height="51"  alt=""/></div>
                    <ul>
                        <li><a href="javascript:;"><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/></a></li>
                        <li><a href="javascript:;"><img src="/Public/Home/images/b2.jpg" width="460" height="320" alt=""/></a></li>
                        <li><a href="javascript:;"><img src="/Public/Home/images/b3.jpg" width="460" height="320" alt=""/></a></li>
                        <li><a href="javascript:;"><img src="/Public/Home/images/b4.jpg" width="460" height="320" alt=""/></a></li>

                        <li><a href="javascript:;"><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/></a></li>
                        <li><a href="javascript:;"><img src="/Public/Home/images/b2.jpg" width="460" height="320" alt=""/></a></li>
                        <li><a href="javascript:;"><img src="/Public/Home/images/b3.jpg" width="460" height="320" alt=""/></a></li>
                        <li><a href="javascript:;"><img src="/Public/Home/images/b4.jpg" width="460" height="320" alt=""/></a></li>
                        
                    </ul>
                </div>
                <div class="min_pic">
                    <div class="prev_btn1" id="prev_btn1"><img src="/Public/Home/images/feel3.png" width="9" height="18"  alt=""/></div>
                    <div class="num clearfix" id="ban_num1">
                        <ul>
                            <li><a href="javascript:;"><img src="/Public/Home/images/s1.jpg" width="75" height="75" alt=""/></a></li>
                            <li><a href="javascript:;"><img src="/Public/Home/images/s2.jpg" width="75" height="75" alt=""/></a></li>
                            <li><a href="javascript:;"><img src="/Public/Home/images/s3.jpg" width="75" height="75" alt=""/></a></li>
                            <li><a href="javascript:;"><img src="/Public/Home/images/s4.jpg" width="75" height="75" alt=""/></a></li>
 
                            <li><a href="javascript:;"><img src="/Public/Home/images/s1.jpg" width="75" height="75" alt=""/></a></li>
                            <li><a href="javascript:;"><img src="/Public/Home/images/s2.jpg" width="75" height="75" alt=""/></a></li>
                            <li><a href="javascript:;"><img src="/Public/Home/images/s3.jpg" width="75" height="75" alt=""/></a></li>
                            <li><a href="javascript:;"><img src="/Public/Home/images/s4.jpg" width="75" height="75" alt=""/></a></li>
                           
                        </ul>
                    </div>
                    <div class="next_btn1" id="next_btn1"><img src="/Public/Home/images/feel4.png" width="9" height="18"  alt=""/></div>
                </div>
            </div>

       <div class="float-left padding-top">
       		<p>主导产业：</p>
            <p>基础设施：</p>
            <p>园区面积：</p>
            <p>土地价格：</p>
            <p>投资：</p>
            <p>税收：</p>
            <p>园区厂房：xxxxxxxxxxxxxx<span>租赁价格</span><span>税收</span></p>
            <p class="hr-border">地址：</p>
            
            <p class="yuyue-p"><span><a href="#"><img src="/Public/Home/images/yuyue.png"></a></span><span><a><img src="/Public/Home/images/8.png"></a></span></p>
            
       </div>
    </div>
    <div class="clear"></div>
    <p class="hr-border" style="height:10px;"></p>
    
      
    <div class="article-nav">
    	<ul>
        	<li id="back1" onclick="show1()" style="background-color:#12b7f5; color:#fff">园区介绍</li>
            <li id="back2" onclick="show2()">园区政策</li>
            <li id="back3" onclick="show3()">入驻企业</li>
            <li id="back4" onclick="show4()">园区相册</li>
            <li id="back5" onclick="show5()">周边配套</li>
            
        </ul> 
    </div>
    <div class="clear"></div>
    <div class="article-cantent">
   
    	<div id="content-article-on1">111111111111111111111111111111</div>
        <div id="content-article-on2" style="display:none">222222222222222222</div>  
        <div id="content-article-on3" style="display:none">33333333333333333333</div>  
        <div id="content-article-on4" style="display:none">4444444444444444444</div>  
        <div id="content-article-on5" style="display:none">5555555555555555555</div>
    </div>
    
    <div class="article-list-nav">
    	<div class="article-list-nav-title">园区推荐</div>
        
        <div class="article-tuijian">
        	<ul>
            	<li><a href=""><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/><p>某某某园区</p></a></li>
                <li><a href=""><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/><p>某某某园区</p></a></li>
                <li><a href=""><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/><p>某某某园区</p></a></li>
                <li><a href=""><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/><p>某某某园区</p></a></li>
                <li><a href=""><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/><p>某某某园区</p></a></li>
                <li><a href=""><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/><p>某某某园区</p></a></li>
                <li><a href=""><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/><p>某某某园区</p></a></li>
                <li><a href=""><img src="/Public/Home/images/bb.jpg" width="460" height="320" alt=""/><p>某某某园区</p></a></li>
            
            </ul>
        
        </div>
    </div>
    
    <div class="page">
    	<ul>
        	<li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
        </ul>
</div>
</div>
<div class="clear"></div>   



 <div class="clear"></div>
<!--底部-->
<div class="footer">
	<div class="footer-box">
    	<div class="float-left auout-us">
        	<ul>
            	<li class="title"><a href="">关于我们</a></li>
                <li><a href="">了解我们</a></li>
                <li><a href="">联系我们</a></li>
                <li><a href="">加入我们</a></li>
            </ul>
        </div>
        
        <div class="float-left auout-us">
        	<ul>
            	<li class="title"><a href="">服务类容</a></li>
                <li><a href="">工商注册</a></li>
                <li><a href="">财务代理</a></li>
                <li><a href="">创业套餐</a></li>
            </ul>
        </div>
        
        <div class="float-right">
        	<p>在线客服（工作日9:00-18:00）</p>
            <h1>400-666-0888</h1>
        </div>
    
    </div>
     <div class="clear"></div>
     
     <div class="banquan">
     	<p>Copyright @ 2016 qibangbang.com Inc. All Rights Reserved</p>
        <p>企业服务（北京）有限公司 京ICP 备案16015423号</p>
     </div>

</div>

</body>
</html>

<script type="text/javascript">
    function show1(){
		var contentOne = document.getElementById("content-article-on1");
		var contentTwo = document.getElementById("content-article-on2");
		var contentThree = document.getElementById("content-article-on3");
		var contentFour = document.getElementById("content-article-on4");
		var contentFive = document.getElementById("content-article-on5");
		contentOne.style.display = 'block';
		contentTwo.style.display = 'none';
		contentThree.style.display = 'none';
		contentFour.style.display = 'none';
		contentFive.style.display = 'none';
		var back1 = document.getElementById("back1");
		var back2 = document.getElementById("back2");
		var back3 = document.getElementById("back3");
		var back4 = document.getElementById("back4");
		var back5 = document.getElementById("back5");
		back1.style.backgroundColor='#12b7f5';
		back2.style.backgroundColor='';
		back3.style.backgroundColor='';
		back4.style.backgroundColor='';
		back5.style.backgroundColor='';
		back1.style.color='#FFF';
		back2.style.color='#000';
		back3.style.color='#000';
		back4.style.color='#000';
		back5.style.color='#000';
		
		
		}
		
	function show2(){
		var contentOne = document.getElementById("content-article-on1");
		var contentTwo = document.getElementById("content-article-on2");
		var contentThree = document.getElementById("content-article-on3");
		var contentFour = document.getElementById("content-article-on4");
		var contentFive = document.getElementById("content-article-on5");
		var back1 = document.getElementById("back1");
		var back2 = document.getElementById("back2");
		var back3 = document.getElementById("back3");
		var back4 = document.getElementById("back4");
		var back5 = document.getElementById("back5");
		back1.style.backgroundColor='';
		back2.style.backgroundColor='#12b7f5';
		back3.style.backgroundColor='';
		back4.style.backgroundColor='';
		back5.style.backgroundColor='';
		
		
		contentTwo.style.display = 'block';
		contentOne.style.display = 'none';
		contentThree.style.display = 'none';
		contentFour.style.display = 'none';
		contentFive.style.display = 'none';
		
		back1.style.color='#000';
		back2.style.color='#FFF';
		back3.style.color='#000';
		back4.style.color='#000';
		back5.style.color='#000';
		}
	function show3(){
		var contentOne = document.getElementById("content-article-on1");
		var contentTwo = document.getElementById("content-article-on2");
		var contentThree = document.getElementById("content-article-on3");
		var contentFour = document.getElementById("content-article-on4");
		var contentFive = document.getElementById("content-article-on5");
		var back1 = document.getElementById("back1");
		var back2 = document.getElementById("back2");
		var back3 = document.getElementById("back3");
		var back4 = document.getElementById("back4");
		var back5 = document.getElementById("back5");
		back1.style.backgroundColor='';
		back2.style.backgroundColor='';
		back3.style.backgroundColor='#12b7f5';
		back4.style.backgroundColor='';
		back5.style.backgroundColor='';
		
		contentTwo.style.display = 'none';
		contentOne.style.display = 'none';
		contentThree.style.display = 'block';
		contentFour.style.display = 'none';
		contentFive.style.display = 'none';
		
		back1.style.color='#000';
		back2.style.color='#000';
		back3.style.color='#FFF';
		back4.style.color='#000';
		back5.style.color='#000';
		}
	function show4(){
		var contentOne = document.getElementById("content-article-on1");
		var contentTwo = document.getElementById("content-article-on2");
		var contentThree = document.getElementById("content-article-on3");
		var contentFour = document.getElementById("content-article-on4");
		var contentFive = document.getElementById("content-article-on5");
		
		var back1 = document.getElementById("back1");
		var back2 = document.getElementById("back2");
		var back3 = document.getElementById("back3");
		var back4 = document.getElementById("back4");
		var back5 = document.getElementById("back5");
		back1.style.backgroundColor='';
		back2.style.backgroundColor='';
		back3.style.backgroundColor='';
		back4.style.backgroundColor='#12b7f5';
		back5.style.backgroundColor='';
		
		contentTwo.style.display = 'none';
		contentOne.style.display = 'none';
		contentThree.style.display = 'none';
		contentFour.style.display = 'block';
		
		contentFive.style.display = 'none';
		
		back1.style.color='#000';
		back2.style.color='#000';
		back3.style.color='#000';
		back4.style.color='#FFF';
		back5.style.color='#000';
		
		}
		
	function show5(){
		var contentOne = document.getElementById("content-article-on1");
		var contentTwo = document.getElementById("content-article-on2");
		var contentThree = document.getElementById("content-article-on3");
		var contentFour = document.getElementById("content-article-on4");
		var contentFive = document.getElementById("content-article-on5");
		
		var back1 = document.getElementById("back1");
		var back2 = document.getElementById("back2");
		var back3 = document.getElementById("back3");
		var back4 = document.getElementById("back4");
		var back5 = document.getElementById("back5");
		back1.style.backgroundColor='';
		back2.style.backgroundColor='';
		back3.style.backgroundColor='';
		back4.style.backgroundColor='';
		back5.style.backgroundColor='#12b7f5';

		contentTwo.style.display = 'none';
		contentOne.style.display = 'none';
		contentThree.style.display = 'none';
		contentFour.style.display = 'none';
		contentFive.style.display = 'block';
		
		back1.style.color='#000';
		back2.style.color='#000';
		back3.style.color='#000';
		back4.style.color='#000';
		back5.style.color='#FFF';
		
		}

    </script>

<script type="text/javascript" src="/Public/Home/js/pic_tab.js"></script>
<script type="text/javascript">
jq('#demo1').banqh({
	box:"#demo1",//总框架
	pic:"#ban_pic1",//大图框架
	pnum:"#ban_num1",//小图框架
	prev_btn:"#prev_btn1",//小图左箭头
	next_btn:"#next_btn1",//小图右箭头
	pop_prev:"#prev2",//弹出框左箭头
	pop_next:"#next2",//弹出框右箭头
	prev:"#prev1",//大图左箭头
	next:"#next1",//大图右箭头
	pop_div:"#demo2",//弹出框框架
	pop_pic:"#ban_pic2",//弹出框图片框架
	pop_xx:".pop_up_xx",//关闭弹出框按钮
	mhc:".mhc",//朦灰层
	autoplay:true,//是否自动播放
	interTime:5000,//图片自动切换间隔
	delayTime:400,//切换一张图片时间
	pop_delayTime:400,//弹出框切换一张图片时间
	order:0,//当前显示的图片（从0开始）
	picdire:true,//大图滚动方向（true为水平方向滚动）
	mindire:true,//小图滚动方向（true为水平方向滚动）
	min_picnum:5,//小图显示数量
	pop_up:true//大图是否有弹出框
})
</script>