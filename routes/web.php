<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/categories', CategoryController::class);

Route::get('/search', [CategoryController::class, 'search'])->name('categories.search');
