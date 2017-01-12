<?php
// +----------------------------------------------------------------------
// | Demo [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2017/1/12 Time: 下午4:55
// +----------------------------------------------------------------------
use limx\phalcon\Ajax;

trait Response
{
    static function success($data = [], $type = 'json')
    {
        switch (strtolower($type)) {
            case 'json':
            default:
                return Ajax::success($data);
        }
    }

    static function error($msg = '', $data = [], $type = 'json')
    {
        switch (strtolower($type)) {
            case 'json':
            default:
                return Ajax::error($msg, $data);
        }
    }
}