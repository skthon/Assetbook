<?php

namespace Skthon\Assetbook;

use Illuminate\Support\ServiceProvider;

class AssetbookServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'assetbook');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/assetbook.php' => config_path('assetbook.php'),
            ], 'assetbook-config');
        }
     }

    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(
            __DIR__.'/../config/assetbook.php', 'assetbook'
        );

        // Register the main class to use with the facade
        $this->app->singleton('assetbook', function () {
            return new Assetbook;
        });
    }
}
