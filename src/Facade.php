<?php

namespace ollielawson\LaravelWpApi;

use ollielawson\LaravelWpApi\WpApi as WordpressApi;

class Facade extends \Illuminate\Support\Facades\Facade
{

    protected static function getFacadeAccessor()
    {
        return WordpressApi::class;
    }

}
