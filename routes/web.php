<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('home');
});

//route des articles

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.details');

Route::get('/admin/articles', [ArticleController::class, 'adminIndex'])->name('admin.articles.index');

Route::get('/admin/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');
Route::post('/admin/articles', [ArticleController::class, 'store'])->name('admin.articles.store');

Route::delete('/admin/articles/{id}', [ArticleController::class, 'destroy'])->name('admin.articles.destroy');

//route des category

Route::get('/categories', [CategoryController::class, 'index']);