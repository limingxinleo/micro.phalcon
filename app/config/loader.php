<?php

/**
 * Registering an autoloader
 */
$loader = new \Phalcon\Loader();

$loader
    ->registerNamespaces(
        [
            'MyApp\Controllers' => $config->application->controllersDir,
            'MyApp\Controllers\Test' => $config->application->controllersDir . 'test/',
            'MyApp\Models' => $config->application->modelsDir,
            'MyApp\Tasks' => $config->application->tasksDir,
            'MyApp\Tasks\System' => $config->application->tasksDir . 'system/',
            'MyApp\Traits' => $config->application->traitsDir,
            'MyApp\Traits\System' => $config->application->traitsDir . 'system/',

        ]
    )->registerFiles(
        [
            $config->application->libraryDir . 'helper.php',
        ]
    )->register();
