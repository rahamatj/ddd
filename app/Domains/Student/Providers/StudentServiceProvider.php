<?php

namespace App\Domains\Student\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domains\Student\Repositories\Contracts\StudentRepositoryInterface;
use App\Domains\Student\Repositories\StudentRepository;

class StudentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            StudentRepositoryInterface::class,
            StudentRepository::class
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
