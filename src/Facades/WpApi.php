<?php 

namespace Jwatkin423\LaravelWpApi\Facades;

use Illuminate\Support\Facades\Facade;
use Jwatkin423\LaravelWpApi\WpApi as WordpressApi;

class WpApi extends Facade {

    protected static function getFacadeAccessor() { return WordpressApi::class; }

}
