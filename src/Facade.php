<?php

namespace Vivify\LaravelWpApi;

use Vivify\LaravelWpApi\WpApi;

class Facade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return WpApi::class;
    }

}
