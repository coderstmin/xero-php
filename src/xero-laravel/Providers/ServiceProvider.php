<?php
namespace XeroLaravel\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use XeroLaravel\Constants;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            Constants::CONFIG_PATH, Constants::CONFIG_KEY
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            Constants::CONFIG_PATH => config_path(Constants::CONFIG_KEY.'.php'),
        ]);
    }
}
