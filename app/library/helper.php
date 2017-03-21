<?php
// +----------------------------------------------------------------------
// | Demo [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2016/11/9 Time: 9:55
// +----------------------------------------------------------------------
use limx\phalcon\Utils\Debug;
use limx\phalcon\Http\Response;
use limx\phalcon\Utils\Arr;


if (!function_exists('dump')) {
    /**
     * [dump desc]
     * @desc   标准化的数组输出格式
     * @author limx
     * @param $data
     */
    function dump($data)
    {
        Debug::dump($data);
    }
}

if (!function_exists('success')) {

    /**
     * [success desc]
     * @desc
     * @author limx
     * @param array $data
     * @return mixed
     */
    function success($data = [])
    {
        return Response::send(1, $data);
    }
}

if (!function_exists('error')) {

    /**
     * [error desc]
     * @desc
     * @author limx
     * @param string $msg
     * @param array  $data
     * @return mixed
     */
    function error($msg = '', $data = [])
    {
        return Response::send(0, $data, $msg);
    }
}

