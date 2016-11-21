<?php
/**
 * 登录处理
 */
include 'boot.php';
include 'class/Db.php';

$data['username'] = trim($_POST['username']);
$data['password'] = trim($_POST['password']);
$data['lastlogin_at'] = time();

//判断是否所有信息都齐全
if(empty($data['username']))
    $error[] = '请填写用户名';

if(empty($data['password']))
    $error[] = '请填写密码';

$_SESSION['loginError'] = null;

if(isset($error)){
    $_SESSION['loginError'] = $error;
    header('location:login.php');
    die();
}

$db = new Db;

//按照用户名查询用户
$user = $db->find('
    select * from users where 
    username = "' . $data['username'] . '"');

//判断用户名和密码是否正确
if(!empty($user) && $user['password'] == md5($data['password'] . $user['created_at'])) {
    //更新最后登录时间
    $rs = $db->exec('
          update into 
          set lastlogin_at = ' . $data['lastlogin_at'] . ' 
          where username = "' . $data['username'] . '"');

    //权限session
    $_SESSION['auth'] = $user;

    header('location:admin.php');
} else {
    $_SESSION['loginError'][] = '账号或密码不正确';
    header('location:login.php');
    die();
}
