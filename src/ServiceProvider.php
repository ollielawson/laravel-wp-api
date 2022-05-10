<?php 

namespace ollielawson\LaravelWpApi;

use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('wp-api.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(WpApi::class, function ($app) {

            $endpoint = $this->app['config']->get('wp-api.endpoint');
            $auth     = $this->app['config']->get('wp-api.auth');
            $client   = $this->app->make('GuzzleHttp\Client');

            return new WpApi($endpoint, $client, $auth);

        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['wp-api'];
    }
}
