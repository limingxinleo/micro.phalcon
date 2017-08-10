<?php

error_reporting(E_ALL);

define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . '/app');
define('IS_CLI', false);

use Phalcon\Mvc\Micro;

try {

    /**
     * Read vendor autoload
     */
    if (file_exists(ROOT_PATH . "/vendor/autoload.php")) {
        include ROOT_PATH . "/vendor/autoload.php";
    }

    $di = require_once APP_PATH . '/bootstrap.php';

    /**
     * Starting the application
     * Assign service locator to the application
     */
    $app = new Micro($di);

    /**
     * Include Application
     */
    include APP_PATH . '/router.php';

    /**
     * Handle the request
     */
    $app->handle();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
