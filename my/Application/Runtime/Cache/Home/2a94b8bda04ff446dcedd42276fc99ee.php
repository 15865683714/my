<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">

<title>首页</title>

<!--公共样式-->
<link rel="stylesheet" type="text/css" href="/Public/home/css/reset.css"/>

<!--公共脚本-->
<script type="text/javascript" src="/Public/home/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.fullPage.min.js"></script>
<!--dialog-->
<!--artdiolag-->
<script type="text/javascript" src="/Public/home/js/artDialog4_jb51net/jquery.artDialog.js"></script>
<script type="text/javascript" src="/Public/home/js/artDialog4_jb51net/artDialog.iframe.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/home/js/artDialog4_jb51net/skins/default.css"/>

<!--前端脚本-->
<script type="text/javascript" src="/Public/home/js/common.js"></script>


</head>

<body>
	<!--导航-->
	<div class="menu" id="menu">
    	<div class="container_1000 m_center cf">
        	<h1 class="logo">
            	<a href="#page1">
                	<span>
                    	<i class="l_1"></i>
                        <i class="l_2"></i>
                        <i class="l_3"></i>
                        <i class="l_4"></i>
                    </span>
                </a>
            </h1>
        	<ul class="nav">
            	<li data-menuanchor="page1" class="active"><a href="#page1">简介</a></li>
                <li data-menuanchor="page2"><a href="#page2">技能</a></li>
                <li data-menuanchor="page3"><a href="#page3">案例作品</a></li>
                <li data-menuanchor="page4"><a href="#page4">联系方式</a></li>
                <li data-menuanchor="page5"><a href="http://www.my.com/index.php/admin/login/login">后台登陆</a></li>
            </ul>
        </div>
    </div>

	<div  id="js_fullpage">

    	<!--个人简介-->
        <div class="section">
        	<div class="container container_1000 m_center align_center">
            	<p class="mb20">
                	<span class="head">
                        <span class="zz"></span>
                        <span class="border"></span>
                        <img src="/Public/home/images/head.jpg" width="169" height="169" />
                    </span>
                </p>
                <p class="p_info mb20">
                	<span class="p_name">赵传伟</span>
                    <br />
                    <span class="p_zhiwei">PHP开发工程师</span>
                </p>
                <p>
                	<span class="zhishi zhishi_1"></span>
                </p>
                <p>
                	<span class="zhishi zhishi_2"></span>
                </p>
                <p class="mb10">
                	<span class="zhishi zhishi_3"></span>
                </p>

                <p class="mb30">
                	<span class="title_1">最新动态</span>
                </p>
                <div class="wrap_time m_center cf">
                	<span class="time_start"></span><span class="time_end"></span>
                    <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><div class="jingli time_1">
                        <p class="jingli_time"><?php echo ($v["time"]); ?></p>
                        <p class="jingli_info"><?php echo ($v["title"]); ?></p>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

        <!--个人技能-->
        <div class="section bg_fff m_center align_center">
        	<p class="mb30">
            	<span class="img_bg title_jn"></span>
            </p>
        	<p>
                	<span class="zhishi zhishi_1"></span>
                </p>
            <p>
                <span class="zhishi zhishi_2"></span>
            </p>
            <p class="mb20">
                <span class="zhishi zhishi_3"></span>
            </p>
            <div class="list_icon">
                <p class="icon_cell icon_cell_1">
                    <span class="icon_ico img_bg"></span>
                    <span class="icon_txt img_bg"></span>
                </p>
                <p class="icon_cell icon_cell_2">
                    <span class="icon_ico img_bg"></span>
                    <span class="icon_txt img_bg"></span>
                </p>
                <p class="icon_cell icon_cell_3">
                    <span class="icon_ico img_bg"></span>
                    <span class="icon_txt img_bg"></span>
                </p>
                <p class="icon_cell icon_cell_4">
                    <span class="icon_ico img_bg"></span>
                    <span class="icon_txt img_bg"></span>
                </p>
                <div class="txt_intro">
                    <p>熟练应用PHP+MySQL技术，能在WAMP环境下熟练编程</p>
                    <p>熟悉掌握JavaScript，jQuery，AJAX等前端技术</p>
                    <p>熟练使用ThinkPHP框架进行项目开发；对laravel框架也有稍微了解</p>
                    <p>熟悉基于MVC框架模式的PHP、Web编程及PHP与Smarty模板的结合</p>
                </div>
            </div>
        </div>

        <!--案例-->
        <div class="section m_center align_center">
        	<p class="mb30">
                <span class="title_1">案例作品</span>
            </p>
        	<p>
                <span class="zhishi zhishi_1"></span>
            </p>
            <p>
                <span class="zhishi zhishi_2"></span>
            </p>
            <p class="mb20">
                <span class="zhishi zhishi_3"></span>
            </p>
            <div class="container container_1000 m_center cf">
            	<div class="container_case">
                    <div class="container wrap_case cf" id="js_wrap_case">
                        <ul class="list_case focus">
                            <li data-url="/index.php/Home/Index/tanchu.html" data-name="博文" class="js_cell_case">
                                <span class="zz"></span>
                                <img src="/Public/home/images/eq/111.jpg" width="248" height="160" />
                                <p class="case_info">
                                    <span>博文</span>
                                    <span>一些个人心得，笔记(可点击查看)</span>
                                </p>
                            </li>
                            <li data-url="/index.php/Home/Index/tanchu2.html" data-name="电子商城项目" class="js_cell_case">
                                <span class="zz"></span>
                                <img src="/Public/home/images/eq/222.jpg" width="248" height="160" />
                                <p class="case_info">
                                    <span>项目</span>
                                    <span>电子商城项目介绍(可点击查看)</span>
                                </p>
                            </li>
                            <li data-url="/index.php/Home/Index/tanchu3.html" data-name="课程管理系统" class="js_cell_case">
                                <span class="zz"></span>
                                <img src="/Public/home/images/eq/333.jpg" width="248" height="160" />
                                <p class="case_info">
                                    <span>项目</span>
                                    <span>课程管理系统项目介绍(可点击查看)</span>
                                </p>
                            </li>
                            <li data-url="/index.php/Home/Index/tanchu.html" data-name="博文" class="js_cell_case">
                                <span class="zz"></span>
                                <img src="/Public/home/images/eq/case.jpg" width="248" height="160" />
                                <p class="case_info">
                                    <span>博文</span>
                                    <span>一些个人心得，笔记(可点击查看)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tips" id="js_tips">
                	<span class="focus"></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <!--约-->
        <div class="section align_center">
        	<p class="mb30">
            	<span class="img_bg2 title_jn title_yue"></span>
            </p>
            <p>
                	<span class="zhishi zhishi_1"></span>
                </p>
            <p>
                <span class="zhishi zhishi_2"></span>
            </p>
            <p class="mb20">
                <span class="zhishi zhishi_3"></span>
            </p>
            <p>
            	<span class="yue_info yue_1"><i>:17600313303</i></span>
            </p>
            <p>
            	<span class="yue_info yue_2"><i>:15865683714@163.com</i></span>
            </p>
            <p>
            	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1250316098&site=qq&menu=yes" class="yue_info yue_3"><i>:1250316098<span>（点击马上约）</span></i></a>
            </p>
        </div>
    </div>
</body>
</html>