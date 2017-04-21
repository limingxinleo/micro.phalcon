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
            'App\Tasks\System' => $config->application->tasksDir . 'system/',
            'App\Traits' => $config->application->traitsDir,
            'App\Traits\System' => $config->application->traitsDir . 'system/',

        ]
    )->registerFiles(
        [
            $config->application->libraryDir . 'helper.php',
        ]
    )->register();
