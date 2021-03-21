<?php

namespace App\Providers;

use App\Repositories\PersonRepository;
use App\Services\PermissionService;
use App\Services\PersonService;
use Illuminate\Support\ServiceProvider;

class ObjectServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PersonService::class, function($app){
            return new PersonService();
        });
        $this->app->singleton(PersonRepository::class, function ($app){
        return new PersonRepository();
    });
        $this->app->singleton(PermissionService::class, function ($app){
            return new PermissionService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
