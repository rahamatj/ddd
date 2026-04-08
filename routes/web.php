<?php

use Illuminate\Support\Facades\Route;
use App\Domains\Post\Controllers\PostController;

Route::get('/', function () {
    return 'hello world';
});

Route::get('/test', [PostController::class, 'index']);
