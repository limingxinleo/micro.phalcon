<?php
// +----------------------------------------------------------------------
// | InitTask 初始化脚本 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2016/11/10 Time: 11:07
// +----------------------------------------------------------------------
namespace MyApp\Tasks\System;

use Phalcon\Cli\Task;

class InitTask extends Task
{
    public function storageAction()
    {
        $config = di('config')->application;
        $creatRoot = [
            'cache.data' => $config->cacheDir . 'data/',
            'cache.view' => $config->cacheDir . 'view/',
            'log' => $config->logDir,
            'meta' => $config->metaDataDir,
            'migrations' => $config->migrationsDir,
        ];
        foreach ($creatRoot as $i => $v) {
            if (!is_dir($v)) {
                mkdir($v, 0777, true);
                echo "create {$i} success!\n";
            }
        }
    }

}