<?php
/**
 * 用户退出登录
 */
include 'boot.php';

$_SESSION['auth'] = null;

header('location:index.php');
