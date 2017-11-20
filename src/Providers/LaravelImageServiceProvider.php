<?php

namespace BinaryCabin\LaravelImage\Providers;

use Illuminate\Support\ServiceProvider;
use BinaryCabin\LaravelImage\ImageHelper;

class LaravelImageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*$this->publishes([
            __DIR__.'/../Configuration/imagehelper.php' => config_path('imagehelper.php')
        ], 'config');*/
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerImageHelper();
    }

    public function registerImageHelper(){
        $this->app->bind('imagehelper',function() {
            return new ImageHelper();
        });
    }

    public function provides()
    {
        return array('imagehelper', ImageHelper::class);
    }



}