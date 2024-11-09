<?php

namespace Core\Http\Service;

class Service {
    public static function get(): RegisterServiceContainer
    {
        return RegisterServiceContainer::get();
    }
}