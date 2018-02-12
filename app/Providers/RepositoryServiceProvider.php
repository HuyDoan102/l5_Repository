<?php

namespace App\Providers;

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
        $this->app->bind(\App\Repositories\Interfaces\PostRepository::class, \App\Repositories\Eloquents\PostRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\CategoryRepository::class, \App\Repositories\Eloquents\CategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\BookRepository::class, \App\Repositories\Eloquents\BookRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\NameRepository::class, \App\Repositories\Eloquents\NameRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\PostRepository::class, \App\Repositories\Eloquents\PostRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Interfaces\ExampleRepository::class, \App\Repositories\Eloquents\ExampleRepositoryEloquent::class);
        //:end-bindings:
    }
}
