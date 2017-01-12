<?php

/**
 * Registering an autoloader
 */
$loader = new \Phalcon\Loader();

$loader->registerDirs(
    [
        $config->application->modelsDir,
        $config->application->tasksDir,
        $config->application->controllersDir,
        $config->application->traitsDir,
    ]
)->registerFiles(
    [
        $config->application->libraryDir . 'helper.php',
    ]
)->register();
