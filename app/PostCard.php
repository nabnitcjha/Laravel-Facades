<?php

namespace App;

use Illuminate\Support\Facades\Facade;

class PostCard extends Facade
{

    // protected static function resolveFacade($name)
    // {
    //     return app()[$name];
    // }
    // public static function __callStatic($method, $arguments)
    // {
    //     return  (self::resolveFacade('PostCard'))->$method(...$arguments);
    // }

    protected static function getFacadeAccessor()
    {
        return 'PostCard';
    }
}
