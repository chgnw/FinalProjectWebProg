<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArticleController::class, 'showAllArticles'])->name('home');

Route::get('/dashboard', [ArticleController::class, 'showAllArticles'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/search', [ArticleController::class, 'search'])->name('search.article');

Route::get('/submitarticle',[ArticleController::class,'submitarticle'])->name('submitarticle');

Route::post('/submitarticle/store',[ArticleController::class,'storearticle'])->name('storearticle');

Route::get('/article', function () {
    return view('articles');
})->name('show.articles');

Route::get('/author', function () {
    return view('authors');
})->name('show.authors');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/privacypolicy',function(){
    return view('privacypolicy');
})->name('privacypolicy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
