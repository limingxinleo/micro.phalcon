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
       | Version Environment
       |--------------------------------------------------------------------------
       |
       | This value is version for this project.
       |
       */
        'version' => '1.1.0',

        /*
        |--------------------------------------------------------------------------
        | Unique_id Environment
        |--------------------------------------------------------------------------
        |
        | This value is your-private-app for this project.
        |
        */
        'unique_id' => env('UNIQUE_ID', 'micro'),

        /*
        |--------------------------------------------------------------------------
        | Database Environment
        |--------------------------------------------------------------------------
        |
        | This value determines the "environment" your database.
        |
        */
        'database' => [
            'adapter' => env('DB_ADAPTER', 'Mysql'),
            'host' => env('DB_HOST', 'localhost'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', null),
            'dbname' => env('DB_DBNAME', 'phalcon'),
            'charset' => env('DB_CHARSET', 'utf8'),
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
