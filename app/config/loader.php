<?php

/**
 * Registering an autoloader
 */
$loader = new \Phalcon\Loader();

$loader
    ->registerNamespaces(
        [
            'App\Controllers' => $config->application->controllersDir,
            'App\Models' => $config->application->modelsDir,
            'App\Tasks' => $config->application->tasksDir,
            'App\Traits' => $config->application->traitsDir,
        ]
    )->registerFiles(
        [
            $config->application->libraryDir . 'helper.php',
        ]
    )->register();
