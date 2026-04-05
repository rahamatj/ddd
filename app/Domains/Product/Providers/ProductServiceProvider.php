<?php

namespace App\Domains\Product\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domains\Product\Repositories\Contracts\ProductRepositoryInterface;
use App\Domains\Product\Repositories\ProductRepository;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
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
