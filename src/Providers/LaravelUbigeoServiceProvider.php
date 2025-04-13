<?php

namespace Holacliente\LaravelUbigeo\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelUbigeoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish the model to the application's app/Models directory
        $this->publishes([
            __DIR__.'/../../src/Models/Ubigeo' => app_path('Models/Ubigeo'),
        ], 'laravel-ubigeo-models');

        // Load and publish migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'laravel-ubigeo-migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}