<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        		$this->app->bind(\App\Domains\Post\Repositories\Contracts\PostRepositoryInterface::class, \App\Domains\Post\Repositories\PostRepository::class);
				$this->app->bind(\App\Domains\Category\Repositories\Contracts\CategoryRepositoryInterface::class, \App\Domains\Category\Repositories\CategoryRepository::class);
				$this->app->bind(\App\Domains\Student\Repositories\Contracts\StudentRepositoryInterface::class, \App\Domains\Student\Repositories\StudentRepository::class);
				$this->app->bind(\App\Domains\Teacher\Repositories\Contracts\TeacherRepositoryInterface::class, \App\Domains\Teacher\Repositories\TeacherRepository::class);
				$this->app->bind(\App\Domains\Product\Repositories\Contracts\ProductRepositoryInterface::class, \App\Domains\Product\Repositories\ProductRepository::class);
				$this->app->bind(\App\Domains\Admin\Repositories\Contracts\AdminRepositoryInterface::class, \App\Domains\Admin\Repositories\AdminRepository::class);
				$this->app->bind(\App\Domains\Employee\Repositories\Contracts\EmployeeRepositoryInterface::class, \App\Domains\Employee\Repositories\EmployeeRepository::class);
				$this->app->bind(\App\Domains\Radio\Repositories\Contracts\RadioRepositoryInterface::class, \App\Domains\Radio\Repositories\RadioRepository::class);
		// append








    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
