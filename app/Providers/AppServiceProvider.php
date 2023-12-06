<?php

namespace App\Providers;

use App\Http\Guards\EstudiantesGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Auth::extend('estudiantes', function ($app, $name, array $config) {
            return new EstudiantesGuard($name, Auth::createUserProvider($config['provider']), $app['session.store'], $app['request']);
        });
    }
}
