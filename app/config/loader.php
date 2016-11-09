<?php

/**
 * Registering an autoloader
 */
$loader = new \Phalcon\Loader();

$loader->registerDirs(
    [
        $config->application->modelsDir
    ]
)->registerFiles(
    [
        $config->application->libraryDir . 'helper.php',
    ]
)->register();
