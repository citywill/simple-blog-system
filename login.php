<?php
/**
 * 用户登录
 */
include 'boot.php';

view($render);

// 清空验证session
$_SESSION['loginError'] = null;