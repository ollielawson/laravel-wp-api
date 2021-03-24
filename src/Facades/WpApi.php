<?php

namespace rk\LaravelWpApi\Facades;

use rk\LaravelWpApi\WpApi as WordpressApi;

class WpApi
{

    protected static function getFacadeAccessor()
    {
        return WordpressApi::class;
    }

}
