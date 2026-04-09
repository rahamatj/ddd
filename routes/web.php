<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Post\Controllers\PostController;
use App\Domains\Category\Controllers\CategoryController;

Route::get('/', function () {
    return 'hello world';
});

Route::get('/posts', [PostController::class, 'index']);
