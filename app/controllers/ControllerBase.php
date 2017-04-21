<?php

namespace App\Controllers;

use Phalcon\Mvc\Controller;
use App\Traits\System\Response;

class ControllerBase extends Controller
{
    use Response;

    public function initialize()
    {
    }
}
