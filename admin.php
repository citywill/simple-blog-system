<?php
/**
 * 博客文章管理页面
 */
include 'boot.php';

//定义菜单激活变量
$render['active'] = 'list';

//获得文章列表
$render['articles'] = getArticles();

view($render);
