<?php
// +----------------------------------------------------------------------
// | 默认路由文件 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2017/2/17 Time: 下午2:44
// +----------------------------------------------------------------------
use Phalcon\Mvc\Micro\Collection as MicroCollection;

$index = new MicroCollection();
// 设置主处理器，这里是控制器的实例
$index->setHandler(
    new App\Controllers\IndexController()
);
// 对所有路由设置前缀
$index->setPrefix("/index");
//  使用IndexController中的index action
$index->get("/", "index");
$index->get("/api", "api");
$app->mount($index);