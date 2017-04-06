<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/./Apps/Admin/View/Public/Css/public.css" />
</head>
<body>
    <table class='table'>
        <tr>
            <th>ID</th>
            <th>用户名</th>
            <th>内容</th>
            <th>时间</th>
            <th>管理</th>
        </tr>
        <?php if(is_array($wish)): $i = 0; $__LIST__ = $wish;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wish): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($wish["uid"]); ?></td>
            <td><?php echo ($wish["username"]); ?></td>
            <td><?php echo (face($wish["content"])); ?></td>
            <td><?php echo (date('Y-m-d H:i',$wish["time"])); ?></td>
            <td><a href="<?php echo U('del',array('uid'=>$wish['uid']));?>"  onclick="return confirm('你确定要删除吗？')">删除</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        <tr>
            <td colspan='5' align='center'><?php echo ($page); ?></td>
        </tr>
    </table>    
</body>
</html>