<?php

namespace App\Auth\Providers;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mapWebRoutes();
        $this->registerPolicies();

        $source = realpath($raw = __DIR__.'/../config/auth.php') ?: $raw;

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('auth.php')]);
        }

        $this->mergeConfigFrom($source, 'auth');

        //
    }

    public function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace('App\Auth\Http\Controllers')
            ->group(__DIR__ . '/../routes/web.php');
    }
}
