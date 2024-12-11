<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArticleController::class, 'showAllArticles'])->name('home');
Route::get('/dashboard', [ArticleController::class, 'showAllArticles'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/article', [ArticleController::class, 'articles'])->name('show.articles');
Route::get('/article/{id}', [ArticleController::class, 'articleDetail'])->name('detail.articles');

Route::get('/search', [ArticleController::class, 'search'])->name('search.article');


Route::get('/submit', [ArticleController::class, 'submitArticle'])->name('submit');
Route::get('/submit', [CategoryController::class, 'showCategory'])->name('show.category');
Route::post('/submit/store', [ArticleController::class, 'storeArticle'])->name('store.article');

// Route::get('/updatearticle/{article}',function(Article $article){
//     return view('updatearticle',compact('article'));
// })->name('update.article');

Route::get('/article/{id}/edit', [ArticleController::class, 'edit']);
Route::put('/article/{id}', [ArticleController::class, 'update']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
