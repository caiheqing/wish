<?php
// 应用前台入口文件
// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);
// 定义应用目录
define('APP_PATH','./Apps/');
//define('BIND_MODULE','Admin');
//定义一个常量THINK_PATH
//realpath返回绝对路径
//和APP_PATH一样THINK_PATH路径定义也必须以“/”结尾。 
//给THINK_PATH和APP_PATH定义绝对路径会提高系统的加载效率
define('THINK_PATH', realpath('./ThinkPHP').'/');
// 引入ThinkPHP入口文件
require THINK_PATH.'ThinkPHP.php';
