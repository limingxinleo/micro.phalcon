<?php
/*
 * Modified: preppend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('ROOT_PATH') || define('ROOT_PATH', getenv('ROOT_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', ROOT_PATH . '/app');
use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

if (file_exists(ROOT_PATH . '/.env')) {
    (new Dotenv(ROOT_PATH))->load();
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
        'version' => '1.6.0',

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
        | Timezone Environment
        |--------------------------------------------------------------------------
        |
        | This value is the timezone for app.
        |
        */
        'timezone' => env('APP_TIMEZONE', 'Asia/Shanghai'),

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
        | Redis Environment
        |--------------------------------------------------------------------------
        |
        | This value determines the "environment" your redis.
        |
        */
        'redis' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'port' => env('REDIS_PORT', '6379'),
            'auth' => env('REDIS_AUTH', null),
            'persistent' => env('REDIS_PERSISTENT', false),
            'index' => env('REDIS_INDEX', 0),
            'prefix' => env('REDIS_PREFIX', ''),
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
            'controllersDir' => APP_PATH . '/controllers/',
            'modelsDir' => APP_PATH . '/models/',
            'routersDir' => APP_PATH . '/routers/',
            'viewsDir' => APP_PATH . '/views/',
            'libraryDir' => APP_PATH . '/library/',
            'servicesDir' => APP_PATH . '/services/',
            'tasksDir' => APP_PATH . '/tasks/',
            'traitsDir' => APP_PATH . '/traits/',
            'cacheDir' => ROOT_PATH . '/storage/cache/',
            'migrationsDir' => ROOT_PATH . '/storage/migrations/',
            'logDir' => ROOT_PATH . '/storage/log/',
            'metaDataDir' => ROOT_PATH . '/storage/meta/',
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
            'sql' => env('LOG_SQL', true),
            'error' => env('LOG_ERROR', true),
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
            'type' => env('CACHE_DRIVER', 'file'),
            'lifetime' => 172800,
        ],

        /*
        |--------------------------------------------------------------------------
        | Cache Environment
        |--------------------------------------------------------------------------
        |
        | The default setting is file.
        | If you want to use redis ,you must set type=redis,
        |
        */
        'session' => [
            'type' => env('SESSION_DRIVER', 'file')
        ],

        /*
        |--------------------------------------------------------------------------
        | COOKIES Environment
        |--------------------------------------------------------------------------
        |
        | isCrypt::是否加密 默认值false.
        |
        */
        'cookies' => [
            'isCrypt' => env('COOKIE_ISCRYPT', false)
        ],

        /*
        |--------------------------------------------------------------------------
        | CRYPT Environment
        |--------------------------------------------------------------------------
        |
        | key::The secret key.
        |
        */
        'crypt' => [
            'key' => env('CRYPT_KEY', 'phalcon-project-cookie->key')
        ],

        /*
        |--------------------------------------------------------------------------
        | Services
        |--------------------------------------------------------------------------
        |
        | The default setting is file.
        | If you want to use redis ,you must set type=redis,
        |
        */
        'services' => [
            'system/session.php',
            'system/cache.php',
            'system/log.php',
            'system/error.php',
            'system/cookies.php',
            'system/crypt.php',
        ],


    ]
);
