<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />

<link rel="Bookmark" href="/Public/admin/favicon.ico" >
<link rel="Shortcut Icon" href="/Public/admin/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/admin/static/h-ui.admin/css/style.css" />
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/admin/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去-->
<!--/meta 作为公共模版分离出去-->

<title>个人网站后台</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui">
<meta name="description" content="H-ui.admin v3.0">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
				</ul>
			</li>
		</ul>
	</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo ($_SESSION['user_info']['name']); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
				</ul>
			</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
</div>
</header>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">

	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 博文管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
					<dd>
						<ul>
							<li><a href="/index.php/Admin/Manager/index.html" title="资讯管理">博文列表</a></li>
							<li><a href="/index.php/Admin/Manager/add" title="资讯管理">博文新增</a></li>
							<li><a href="/Admin/Role/index" title="资讯管理">角色管理</a></li>
							<li><a href="/index.php/Admin/Auth/index" title="资讯管理">权限管理</a></li>
						</ul>
					</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>
					<li><a href="feedback-list.html" title="意见反馈">意见反馈</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="system-base.html" title="系统设置">系统设置</a></li>
					<li><a href="system-category.html" title="栏目管理">栏目管理</a></li>
					<li><a href="system-data.html" title="数据字典">数据字典</a></li>
					<li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>
					<li><a href="system-log.html" title="系统日志">系统日志</a></li>
				</ul>
			</dd>
		</dl>
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->




<title>角色管理 - 管理员管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<!--_header 作为公共模版分离出去-->

<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->

<!--/_menu 作为公共模版分离出去-->

<section class="Hui-article-box">
  <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 博文管理 <span class="c-gray en">&gt;</span> 博文列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
  <div class="Hui-article">
    <article class="cl pd-20">
      <div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="javascript:void(0);" onclick="admin_manager_add('添加文章','/index.php/Admin/Manager/add','800')"><i class="Hui-iconfont">&#xe600;</i> 发布文章</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
      <div class="mt-10">
      <table class="table table-border table-bordered table-hover table-bg">
        <thead>
          <tr>
            <th scope="col" colspan="6">博文管理</th>
          </tr>
          <tr class="text-c">
            <th width="25"><input type="checkbox" value="" name=""></th>
            <th width="40">ID</th>
            <th width="200">标题</th>
            <th width="200">发布时间</th>
            <th width="70">操作</th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr class="text-c">
            <td><input type="checkbox" value="" name=""></td>
            <td><?php echo ($vol["id"]); ?></td>
            <td><?php echo ($vol["title"]); ?></td>
            <td><?php echo ($vol["time"]); ?></td>
            <td class="f-14"><a title="编辑" href="javascript:;" onclick="admin_role_edit('角色编辑','/index.php/Admin/Manager/edit/id/<?php echo ($vol["id"]); ?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo ($vol["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
      </div>
    </article>
  </div>
</section>


<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*管理员-角色-添加*/
function admin_manager_add(title,url,w,h){
  layer_show(title,url,w,h);
}
/*管理员-角色-编辑*/
function admin_role_edit(title,url,id,w,h){
  layer_show(title,url,w,h);
}
/*管理员-角色-删除*/
function del(obj,id){
  layer.confirm('角色删除须谨慎，确认要删除吗？',function(index){
    //此处请求后台程序，下方是成功后的前台处理……
    if (index) {
      $.ajax({
        url:'/index.php/Admin/Manager/del',
        type:'post',
        dataType:'json',
        data:{'id':id},
        'success':function(response){
          if (response.code==10000) {
            $(obj).parents("tr").remove();
            layer.msg('删除成功',{icon:1,time:2000});
          }else{
            layer.msg('删除失败',{icon:0,time:2000});
          }
        }
      })
    }
  });
}
</script>
<!--/请在上方写此页面业务相关的脚本-->






</body>
</html>