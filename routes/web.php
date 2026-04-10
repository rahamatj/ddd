<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Post\Controllers\PostController;
use App\Domains\Category\Controllers\CategoryController;

Route::get('/', function () {
    return 'hello world';
});

Route::resource('posts', PostController::class);
Route::resource('categories', CategoryController::class);

// append
