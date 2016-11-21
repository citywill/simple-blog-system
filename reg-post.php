<?php
/**
 * 处理用户注册
 */
include 'boot.php';
include 'class/Db.php';

//构建数据
$data['username'] = trim($_POST['username']);
$data['password'] = trim($_POST['password']);
$data['password2'] = trim($_POST['password2']);
$data['created_at'] = time();

//判断是否所有信息都齐全
if(empty($data['username']))
    $error[] = '请填写用户名';

if(empty($data['password']))
    $error[] = '请填写密码';

if($data['password'] != $data['password2'])
    $error[] = '两次输入的密码不一致';

$db = new Db;

//如果姓名重复
if($db->find('select * from users where username = "' . $data['username'] . '"'))
    $error[] = '已经有人使用该用户名，请更换一个再试';

if(isset($error)){
    $_SESSION['regError'] = $error;
    header('location:reg.php');
    die();
}

//用户信息插入数据库库
$rs = $db->exec('
          insert into users (username, password, created_at) values (
          "' . $data['username'] . '",
          "' . md5($data['password'] . $data['created_at']) . '", 
          ' . $data['created_at'] . '
          )
      ');

//注册之后跳转到登录页面
header('location:login.php');