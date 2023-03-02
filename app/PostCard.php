<?php

namespace App;

class PostCard
{

    protected static function resolveFacade($name)
    {
        return app()[$name];
    }
    public static function __callStatic($method, $arguments)
    {
        return  (self::resolveFacade('PostCard'))->$method(...$arguments);
    }
}
