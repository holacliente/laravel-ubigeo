<?php

namespace Holacliente\LaravelUbigeo\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Support\Facades\Artisan;
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
        $this->publishes([
            __DIR__.'/../../src/Models/Ubigeo/Departamento.php' => app_path('Models/Ubigeo/Departamento.php'),
            __DIR__.'/../../src/Models/Ubigeo/Provincia.php' => app_path('Models/Ubigeo/Provincia.php'),
            __DIR__.'/../../src/Models/Ubigeo/Distrito.php' => app_path('Models/Ubigeo/Distrito.php'),
        ], 'laravel-ubigeo-models');

        $this->loadMigrationsFrom(__DIR__.'/../../src/database/migrations');

        // 3. Ejecutar acciones post-instalación
        $this->handlePostInstall();

        $this->handlePostPublish();
    }

    protected function handlePostPublish()
    {
        if ($this->app->runningInConsole()) {
            Event::listen(CommandFinished::class, function (CommandFinished $event) {
                if ($event->command === 'vendor:publish') {
                    Artisan::call('migrate', ['--force' => true]);
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
        // Ejecutar migraciones
        if ($this->confirm('¿Ejecutar migraciones? [y|N]')) {
            Artisan::call('migrate', ['--force' => true]);
        }

        // Mostrar feedback
        $this->info('¡Plugin instalado correctamente!');
        $this->info('Modelos copiados en: app/Models/MiPlugin');
        $this->info('Migraciones ejecutadas: ' . Artisan::output());
    }

    public function register()
    {
        // Registrar configuración si es necesario
        // $this->mergeConfigFrom(
        //     __DIR__.'/../../config/mi-plugin.php', 'mi-plugin'
        // );
    }
}