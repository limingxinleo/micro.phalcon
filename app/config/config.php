<?php
/*
 * Modified: preppend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');
use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

if (file_exists(BASE_PATH . '/.env')) {
    (new Dotenv(BASE_PATH))->load();
}
return new \Phalcon\Config(
    [
        /*
        |--------------------------------------------------------------------------
        | Database Environment
        |--------------------------------------------------------------------------
        |
        | This value determines the "environment" your database.
        |
        */
        'database' => [
            'adapter' => 'Mysql',
            'host' => 'localhost',
            'username' => 'root',
            'password' => '910123',
            'dbname' => 'laravel',
            'charset' => 'utf8',
        ],

        /*
        |--------------------------------------------------------------------------
        | Application Environment
        |--------------------------------------------------------------------------
        |
        | This value determines the "environment" your application is currently
        | running in. This may determine how you prefer to configure various
        | services your application utilizes.
        |
        */
        'application' => [
            'configDir' => APP_PATH . '/config/',
            'modelsDir' => APP_PATH . '/models/',
            'migrationsDir' => APP_PATH . '/migrations/',
            'viewsDir' => APP_PATH . '/views/',
            'libraryDir' => APP_PATH . '/library/',
            'cacheDir' => BASE_PATH . '/storage/cache/',
            'migrationsDir' => BASE_PATH . '/storage/migrations/',
            'logDir' => BASE_PATH . '/storage/log/',
            'metaDataDir' => BASE_PATH . '/storage/meta/',
            'baseUri' => '/',
        ],

        /*
        |--------------------------------------------------------------------------
        | Log Environment
        |--------------------------------------------------------------------------
        |
        | If sql is set to true, then we write a log at the end of each sql.
        |
        */
        'log' => [
            'sql' => true,
        ],

        /*
        |--------------------------------------------------------------------------
        | Cache Environment
        |--------------------------------------------------------------------------
        |
        | The default setting is file.
        | If you want to use redis ,you must set type=redis,
        | Because the redis config using env,so the env.type must set to true,
        | And composer require vlucas/phpdotenv
        |
        */
        'cache' => [
            'type' => 'file',
            'lifetime' => 172800,
        ],


    ]
);
