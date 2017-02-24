<?php

/**
 * Registering an autoloader
 */
$loader = new \Phalcon\Loader();

$loader
    ->registerNamespaces(
        [
            'MyApp\Controllers' => $config->application->controllersDir,
            'MyApp\Models' => $config->application->modelsDir,
            'MyApp\Tasks' => $config->application->tasksDir,
            'MyApp\Tasks\System' => $config->application->tasksDir . 'system/',
            'MyApp\Traits' => $config->application->traitsDir,
        ]
    )->registerFiles(
        [
            $config->application->libraryDir . 'helper.php',
        ]
    )->register();
