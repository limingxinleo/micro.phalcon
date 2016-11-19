<?php
/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */

/**
 * Add your routes here
 */
$app->get('/', function () {
    $this['view']->version = di('config')->version;
    echo $this['view']->render('app/index');
});

$app->get('/test/params/{key}/{value}', function ($ss, $key) {
    dump($key);
});

$app->get('/test/cache', function () {
    di('cache')->save('cache', time());
    echo di('cache')->get('cache');
    dump(di('cache')->queryKeys());
});

$app->get('/test/session', function () {
    session('key', time());
    echo session('key');
});

$app->get('/test/sql', function () {
    $sql = "SELECT * FROM user WHERE id < ?;";
    $res = \limx\phalcon\DB::query($sql, [10]);
    dump($res);
});

$app->get('/test/model', function () {
    $user = User::findFirst(1);
    dump($user);
});

/**
 * Not found handler
 */
$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo $app['view']->render('404');
});