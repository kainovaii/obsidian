<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Core\Http\Middleware\MiddlewareInterface;
use Core\Http\Service\Service;

final class DefaultMiddleware implements MiddlewareInterface
{
    public function handle() : bool
    {
        if (Service::get()->csrf->generateToken()) return true;
        return false;
    }
}
