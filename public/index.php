<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Micro;

error_reporting(E_ALL);

define('ROOT_PATH', dirname(__DIR__));
define('APP_PATH', ROOT_PATH . '/app');
define('IS_CLI', false);

try {

    /**
     * The FactoryDefault Dependency Injector automatically registers the services that
     * provide a full stack framework. These default services can be overidden with custom ones.
     */
    $di = new FactoryDefault();

    /**
     * Read vendor autoload
     */
    if (file_exists(ROOT_PATH . "/vendor/autoload.php")) {
        include ROOT_PATH . "/vendor/autoload.php";
    }

    /**
     * Get config service for use in inline setup below
     */
    $config = include APP_PATH . "/config/config.php";

    /** 设置时区 */
    ini_set('date.timezone', $config->timezone);

    /**
     * Include Autoloader
     */
    include APP_PATH . '/config/loader.php';

    /**
     * Include Services
     */
    include APP_PATH . '/config/services.php';

    /**
     * Starting the application
     * Assign service locator to the application
     */
    $app = new Micro($di);

    /**
     * Include Application
     */
    // include APP_PATH . '/config/router.php';
    include APP_PATH . '/router.php';

    /**
     * Handle the request
     */
    $app->handle();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
