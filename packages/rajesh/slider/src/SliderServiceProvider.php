<?php

namespace Rajesh\Slider;

use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('rajesh\slider\SliderController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'slider');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/rajesh/slider'),
            __DIR__.'/assets' => public_path(''),
        ], 'public');
    }
}
