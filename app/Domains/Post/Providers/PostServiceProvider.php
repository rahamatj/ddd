<?php

namespace App\Domains\Post\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domains\Post\Repositories\Contracts\PostRepositoryInterface;
use App\Domains\Post\Repositories\PostRepository;
use App\Domains\Post\Responders\Contracts\ResponderInterface;
use App\Domains\Post\Responders\Web\WebResponder;
use App\Domains\Post\Responders\API\APIResponder;

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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
