<?php
/**
 * 后台新增或编辑页面
 */
include 'boot.php';

//权限控制
authAccess();

//定义菜单激活变量
$render['active'] = 'edit';

//初始化视图变量，避免视图中出现undifined错误
$render['article'] = [
    'title' => '',
    'content' => '',
];

//如果有$_GET['id']，说明是编辑已有文章
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //构建数据文件名
    $fileName = DATA_PATH . '/' . $id . '.php';

    //判断数据文件是否存在
    if (file_exists($fileName)) {

        //从文件中取出数据
        $data = file_get_contents($fileName);

        //将数据反序列化为数组，赋值给视图变量
        $render['article'] = unserialize($data);
    }
}

view($render);
