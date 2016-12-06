<?php

use Phalcon\Mvc\View\Simple as View;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Mvc\Model\Metadata\Files as MetadataFiles;

/**
 * Shared configuration service
 */
$di->setShared('config', function () {
    return include APP_PATH . "/config/config.php";
});

/**
 * Sets the view component
 */
$di->setShared('view', function () {
    $config = $this->getConfig();

    $view = new View();
    $view->setViewsDir($config->application->viewsDir);
    $view->registerEngines(
        [
            '.volt' => function ($view, $di) use ($config) {
                $volt = new VoltEngine($view, $di);

                $volt->setOptions(
                    [
                        'compiledPath' => $config->application->cacheDir . 'view/',
                        'compiledSeparator' => '_'
                    ]
                );

                return $volt;
            },
            // Generate Template files uses PHP itself as the template engine
            '.phtml' => 'Phalcon\Mvc\View\Engine\Php',
        ]
    );
    return $view;
});

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->setShared('url', function () {
    $config = $this->getConfig();

    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);
    return $url;
});

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->setShared('db', function () {
    $config = $this->getConfig();

    $class = 'Phalcon\Db\Adapter\Pdo\\' . $config->database->adapter;
    $connection = new $class([
        'host' => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname' => $config->database->dbname,
        'charset' => $config->database->charset
    ]);

    return $connection;
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->set('modelsMetadata', function () {
    $config = $this->getConfig();
    return new MetadataFiles(
        [
            'metaDataDir' => $config->application->metaDataDir,
        ]
    );
});

/**
 * Read other services
 */
foreach (di('config')->services as $service) {
    $config = di('config');
    if (file_exists($config->application->servicesDir . $service)) {
        include $config->application->servicesDir . $service;
    }
}

