<?php

namespace ThreeSidedCube\LaravelRedoc;

use Illuminate\Support\ServiceProvider;

class RedocServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/redoc.php' => config_path('redoc.php'),
            ], 'redoc-config');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/redoc'),
            ], 'redoc-views');
        }

        $this->loadRoutesFrom(__DIR__ . '/../routes/redoc.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'redoc');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/redoc.php', 'redoc');
    }
}
