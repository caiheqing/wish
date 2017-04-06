<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/./Apps/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/./Apps/Admin/View/Public/Js/index.js"></script>
<link rel="stylesheet" href="/./Apps/Admin/View/Public/Css/public.css" />
<link rel="stylesheet" href="/./Apps/Admin/View/Public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
	<div id="top">
		<div class="menu">
			<a href="#">选择按钮</a>
		</div>
		<div class="exit">
			<a href="<?php echo U('Login/logout');?>" target="_self">退出</a>
			<a href="#" target="_blank"><?php echo ($admin); ?></a>
		</div>
	</div>
	<div id="left">
		<dl>
			<dt>许愿管理</dt>
			<dd><a href="<?php echo U('/Admin/Wish');?>">许愿列表</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
		<dl>
			<dt>功能标题</dt>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
		<dl>
			<dt>功能标题</dt>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
			<dd><a href="#">功能标题</a></dd>
		</dl>
	</div>
	<div id="right">
		<iframe name="iframe" src="#"></iframe>
	</div>
</body>
</html>