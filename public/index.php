<?php

use App\Http\Api\BlogApiController;
use App\Http\Api\PolicyApiController;
use App\Http\Api\RoleApiController;
use App\Http\Controller\BlogController;
use App\Http\Controller\PolicyController;
use App\Http\Controller\RoleController;
use App\Http\Controller\SettingController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Api\UserApiController;
use App\Http\Controller\HomeController;
use App\Http\Controller\UserController;
use App\Http\Middleware\DefaultMiddleware;
use Core\Application;

define('ROOT_DIR', dirname(__DIR__));

require_once ROOT_DIR .
    DIRECTORY_SEPARATOR . 'vendor' .
    DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application();

$app->middlewares->add('auth', AuthMiddleware::class);
$app->middlewares->add('default', DefaultMiddleware::class);

$app->registerController($app, HomeController::class);
$app->registerController($app, UserController::class);
$app->registerController($app, UserApiController::class);
$app->registerController($app, BlogController::class);
$app->registerController($app, BlogApiController::class);
$app->registerController($app, RoleController::class);
$app->registerController($app, RoleApiController::class);
$app->registerController($app, PolicyController::class);
$app->registerController($app, PolicyApiController::class);
$app->registerController($app, SettingController::class);

$app->run();