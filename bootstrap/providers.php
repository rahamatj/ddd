<?php

return [
    App\Domains\Category\Providers\CategoryRepositoryServiceProvider::class,
    App\Domains\Category\Providers\CategoryServiceProvider::class,
    App\Domains\Post\Providers\PostRepositoryServiceProvider::class,
    App\Domains\Post\Providers\PostServiceProvider::class,
    App\Domains\Product\Providers\ProductRepositoryServiceProvider::class,
    App\Domains\Product\Providers\ProductServiceProvider::class,
    App\Domains\Student\Providers\StudentRepositoryServiceProvider::class,
    App\Domains\Student\Providers\StudentServiceProvider::class,
    App\Providers\AppServiceProvider::class,
    App\Providers\CategoryRepositoryServiceProvider::class,
    App\Providers\PostRepositoryServiceProvider::class,
    App\Providers\ProductRepositoryServiceProvider::class,
    App\Providers\RepositoryServiceProvider::class,
    App\Providers\StudentRepositoryServiceProvider::class,
];
