<?php
/**
 * 用户注册
 */
include 'boot.php';
include 'class/Db.php';

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

$_SESSION['regError'] = null;

if(isset($error)){
    $_SESSION['regError'] = $error;
    header('location:reg.php');
    die();
}

$rs = $db->exec('
          insert into users (username, password, created_at) values (
          "' . $data['username'] . '",
          "' . md5($data['password'] . $data['created_at']) . '", 
          ' . $data['created_at'] . '
          )
      ');

header('location:login.php');
//$rs = $db->find('select * from users where id = 2');

//var_dump($rs);