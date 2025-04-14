<?php

namespace Holacliente\LaravelUbigeo\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Support\Facades\Event;

class LaravelUbigeoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->handlePostPublish();
    }

    protected function handlePostPublish()
    {
        if ($this->app->runningInConsole()) {
            Event::listen(CommandFinished::class, function (CommandFinished $event) {
                if ($event->command === 'vendor:publish') {
                    $this->runPostInstallActions();
                }
            });
        }
    }

    protected function handlePostInstall()
    {
        if ($this->app->runningInConsole()) {
            Event::listen(CommandFinished::class, function (CommandFinished $event) {
                if ($event->command === 'vendor:publish') {
                    $this->runPostInstallActions();
                }
            });
        }
    }

    protected function runPostInstallActions()
    {
        echo "welcome...";
    }

    public function register()
    {
        // 
    }
}