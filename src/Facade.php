<?php

namespace rk\LaravelWpApi;

use rk\LaravelWpApi\WpApi as WordpressApi;

class Facade extends Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return WordpressApi::class;
    }

}
