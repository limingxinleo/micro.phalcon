<?php
// +----------------------------------------------------------------------
// | Demo [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2017/2/25 Time: 下午9:53
// +----------------------------------------------------------------------
namespace App\Tasks\Test;

use Phalcon\Cli\Task;

class TestTask extends Task
{
    public function mainAction()
    {
        $res = 0;
        for ($res = 0; $res < 10000; $res++) {
            if ($res % 2 != 1) {
                continue;
            }
            if ($res % 3 != 0) {
                continue;
            }
            if ($res % 4 != 1) {
                continue;
            }
            if ($res % 5 != 4) {
                continue;
            }
            if ($res % 6 != 3) {
                continue;
            }
            if ($res % 7 != 0) {
                continue;
            }
            if ($res % 8 != 1) {
                continue;
            }
            if ($res % 9 != 0) {
                continue;
            }
            echo $res;
            return;
        }
    }

}