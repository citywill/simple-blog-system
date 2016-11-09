<?php
/**
 * 文章内容页
 */
include 'boot.php';

/*
获取指定id的文章内容
先判断是否传递了id参数$_GET['id']
再判断数据文件是否存在
 */
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $fileName = DATA_PATH . '/' . $id . '.php';
    if (file_exists($fileName)) {
        $data = file_get_contents($fileName);
        $render['article'] = unserialize($data);
    }
}

view($render);
