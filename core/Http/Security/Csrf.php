<?php

namespace Core\Http\Security;

use Core\Http\Service\Service;

class Csrf
{
    public function generateToken(): string
    {
        $token = bin2hex(random_bytes(16));
        Service::get()->session->set('csrf', $token);
        return $token;
    }

    public function removeToken(): void
    {
        Service::get()->session->delete('csrf');
    }

    public function getToken(): string
    {
        return Service::get()->session->get('csrf');
    }

    public static function render(): string
    {
        return sprintf('<input type="hidden" name="csrf" value="%s">', Service::get()->csrf->getToken());
    }
}