<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcome';
});


Route::resource('posts', \App\Domains\Post\Controllers\PostController::class);

Route::resource('categories', \App\Domains\Category\Controllers\CategoryController::class);

Route::resource('students', \App\Domains\Student\Controllers\StudentController::class);

Route::resource('teachers', \App\Domains\Teacher\Controllers\TeacherController::class);

Route::resource('products', \App\Domains\Product\Controllers\ProductController::class);

Route::resource('admins', \App\Domains\Admin\Controllers\AdminController::class);
// append
