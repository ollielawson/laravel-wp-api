<?php

namespace Vivify\LaravelWpApi;

use Vivify\LaravelWpApi\WpApi as WordpressApi;

class WpApi extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return WordpressApi::class;
    }

}
