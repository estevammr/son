<?php

namespace LaravelAndroid\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\LaravelAndroid\Repositories\CategoryRepository::class, \LaravelAndroid\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\LaravelAndroid\Repositories\BillPayRepository::class, \LaravelAndroid\Repositories\BillPayRepositoryEloquent::class);
        $this->app->bind(\LaravelAndroid\Repositories\UserRepository::class, \LaravelAndroid\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
