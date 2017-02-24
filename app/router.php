<?php
/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */
foreach (glob($config->application->routersDir . "*.php") as $router) {
    if (file_exists($router)) {
        include $router;
    }
}


