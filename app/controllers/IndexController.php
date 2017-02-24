<?php
namespace MyApp\Controllers;

class IndexController extends ControllerBase
{
    public function index()
    {
        $this->view->version = di('config')->version;
        return $this->view->render('app/index');
    }
}

