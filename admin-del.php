<?php
/**
 * 删除文章
 */
include 'boot.php';

//判断是否有$_GET['id']
if (isset($_GET['id'])) {

    //构造文件名
    $id = $_GET['id'];
    $fileName = DATA_PATH . '/' . $id . '.php';

    //如果文件存在就删除
    if (file_exists($fileName)) {
        unlink($fileName);
    }
}

//跳转到admin.php
header('location:admin.php');
