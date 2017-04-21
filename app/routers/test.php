<?php
use Phalcon\Mvc\Micro\Collection as MicroCollection;

$index = new MicroCollection();
// 设置主处理器，这里是控制器的实例
$index->setHandler(
    new App\Controllers\Test\IndexController()
);
// 对所有路由设置前缀
$index->setPrefix("/test/index");
//  使用IndexController中的index action
$index->get("/", "index");
$index->get("/api", "api");
$index->get("/cache", "cache");
$index->get("/cookie", "cookie");
$app->mount($index);