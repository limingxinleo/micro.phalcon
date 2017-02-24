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
/**
 * Add your routes here
 */
$app->get('/', function () {
    $this['view']->version = di('config')->version;
    return $this['view']->render('app/index');
});

/**
 * Not found handler
 */
$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    return $app['view']->render('public/404');
});


