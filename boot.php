<?php
/**
 * 定义一些常量和函数
 */

//定义程序路径
define('APP_PATH', __DIR__);
//定义视图路径
define('TPL_PATH', APP_PATH . '/template');
//定义数据存储路径
define('DATA_PATH', APP_PATH . '/data');
//定义资源（js、css、图片等）路径
define('SRC_URL', '/src');

// 启动session
session_start();

/**
 * 获取文章列表
 * @return array 返回文章列表数组，如果文章不存在则返回false
 */
function getArticles()
{
    //获取data目录下的文件
    $files = scandir(DATA_PATH);
    //将表示当前目录和上一级目录的数组元素删除
    $files = array_diff($files, array('.', '..'));

    //如果是空目录则返回false
    if (empty($files)) {
        return false;
    }

    //将数组逆序
    rsort($files);

    //遍历数组
    foreach ($files as $file) {
        //获得数据文件的内容
        $data = file_get_contents(DATA_PATH . '/' . $file);

        //将数据反序列化为数组，并将该数组赋值给$articles[]
        //构建一个文章列表的数组$articles
        $articles[] = unserialize($data);
    }

    return $articles;
}

/**
 * 视图调用函数
 * @param  array $render 程序向视图中传递的变量
 */
function view($render)
{
    //引入同名视图，避免每个程序在引入视图时都要指定文件名
    include TPL_PATH . '/' . basename($_SERVER['PHP_SELF']);
}

//初始化视图变量，避免 undefined 的错误
$render = array();
