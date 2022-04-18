<?php

namespace LaravelPorto\Containers\Book\Providers;

use Illuminate\Support\ServiceProvider;
use LaravelPorto\Containers\Book\Actions\Decorators\GetBookListActionLogger;
use LaravelPorto\Containers\Book\Actions\GetBookListAction;
use LaravelPorto\Containers\Book\Proxies\BookEloquentProxy;
use LaravelPorto\Containers\Book\Subactions\Interfaces\GetBookListActionInterface;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $bookListAction = new GetBookListAction(new BookEloquentProxy());
        $bookListActionLogged = new GetBookListActionLogger($bookListAction);

        $this->app->bind(GetBookListActionInterface::class, function ($app) use ($bookListActionLogged) {
            return $bookListActionLogged;
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
