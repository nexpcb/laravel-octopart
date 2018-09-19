<?php

namespace NexPCB\LaravelOctopart;

use Illuminate\Support\ServiceProvider;
use NexPCB\PHPOctopart\OctopartClient;

class LaravelOctopartServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind the Octopart wrapper class
        $this->app->bind('NexPCB\LaravelOctopart\Octopart', function ($app) {
            return OctopartClient::create(['apikey' => env('OCTOPART_API_KEY', config('octopart.apikey'))]);
        });
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // config
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('octopart.php')
        ], 'config');
    }

}