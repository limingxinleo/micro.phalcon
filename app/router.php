<?php
/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */
$dir = $di->getShared('config')->application->configDir . 'routes';
foreach (glob($dir . '/*.php') as $item) {
    include_once $item;
}


