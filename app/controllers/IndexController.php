<?php
namespace App\Controllers;

class IndexController extends ControllerBase
{
    public function index()
    {
        $data = [
            'name' => 'phalcon-micro',
            'version' => di('config')->version,
        ];
        return self::success($data);
    }
}

