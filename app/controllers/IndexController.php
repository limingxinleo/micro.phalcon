<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function index()
    {
        $this->view->version = di('config')->version;
        return $this->view->render('app/index');
    }

}

