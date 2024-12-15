<?php

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\DefaultMiddleware;
use Core\Application;

define('ROOT_DIR', dirname(__DIR__));

require_once ROOT_DIR .
    DIRECTORY_SEPARATOR . 'vendor' .
    DIRECTORY_SEPARATOR . 'autoload.php';

/*
|--------------------------------------------------------------------------
| Initialize app
|--------------------------------------------------------------------------
*/
$app = new Application();

/*
|--------------------------------------------------------------------------
| Register middlewares
|--------------------------------------------------------------------------
*/
$app->middlewares->add('auth', AuthMiddleware::class);
$app->middlewares->add('default', DefaultMiddleware::class);

/*
|--------------------------------------------------------------------------
| Register controllers and APIs
|--------------------------------------------------------------------------
*/
$app->registerController($app);
$app->registerControllerApi($app);

/*
|--------------------------------------------------------------------------
| Run the obsidian app
|--------------------------------------------------------------------------
*/
$app->run();