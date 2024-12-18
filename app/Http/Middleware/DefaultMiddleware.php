<?php
namespace App\Http\Middleware;

use Core\Http\Middleware\MiddlewareInterface;
use Core\Http\Service\Container;

final class DefaultMiddleware implements MiddlewareInterface
{
    public function handle() : bool
    {
        if (Container::get()->csrf->generateToken()) return true;
        return false;
    }
}