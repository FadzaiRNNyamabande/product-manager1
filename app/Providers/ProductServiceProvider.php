<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
{
    $this->app->bind('App\Http\Controllers\ProductController', function ($app) {
        return new \App\Http\Controllers\ProductController();
    });
}


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
