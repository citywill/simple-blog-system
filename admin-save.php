<?php
/**
 * 保存新增和编辑的文章
 */
include 'boot.php';

//获得表单传递过来的数据
$data = $_POST;

//如果$data['id']存在，说明数据已经存在，要覆盖旧数据
//如果$data['id']不存在，说明是新增文章，要新建数据
if (empty($data['id'])) {
    $data['id'] = uniqid();
}

//序列化数据
$fileContent = serialize($data);

//构建数据文件名
$fileName = DATA_PATH . '/' . $data['id'] . '.php';

//写入文件
file_put_contents($fileName, $fileContent);

//跳转到admin.php
header('location:admin.php');
