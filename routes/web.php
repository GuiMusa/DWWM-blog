<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);