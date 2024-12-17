<?php

use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\DefaultMiddleware;
use Core\Application;
use Core\Http\Service\Container;
use Core\Http\Service\ServiceContainer;
use Core\Http\Register;

define('ROOT_DIR', dirname(__DIR__));

require_once 
    ROOT_DIR .
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