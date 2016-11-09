<?php
/**
 * 博客首页
 */
//引入启动程序
include 'boot.php';

//准备视图中使用的变量
$render['articles'] = getArticles();

//调用视图
view($render);
