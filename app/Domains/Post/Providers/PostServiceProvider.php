<?php

namespace App\Domains\Post\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domains\Post\Repositories\Contracts\PostRepositoryInterface;
use App\Domains\Post\Repositories\PostRepository;

use App\Domains\Post\Responders\Contracts\IndexAPIResponderInterface;
use App\Domains\Post\Responders\API\IndexAPIResponder;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
        );

        $this->app->bind(IndexAPIResponderInterface::class, IndexAPIResponder::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
