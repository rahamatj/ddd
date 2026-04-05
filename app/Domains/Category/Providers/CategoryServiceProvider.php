<?php

namespace App\Domains\Category\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domains\Category\Repositories\Contracts\CategoryRepositoryInterface;
use App\Domains\Category\Repositories\CategoryRepository;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
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
