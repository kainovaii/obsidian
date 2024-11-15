<?php

namespace Core\Http\Service;

class Test extends RegisterServiceContainer
{
    public function __construct()
    {
        $container = new ServiceContainer();
        $this->registerService($container);
        $this->registerRepository($container);
        $this->registerOther($container);
        $this->registerListener();
    }

    public static function get(): mixed
    {
        $class = get_called_class();
        if(!isset(self::$_instance[$class]))
        {
            self::$_instance[$class] = new $class;
        }
        return self::$_instance[$class];
    }
}