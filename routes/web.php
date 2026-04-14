<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\ArticleController;

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');

//Controller routes
Route::get('content', [ContentController::class, 'index'])->name('content.index');
Route::get('content/{id}', [ContentController::class, 'show'])->name('content.show');
Route::get('live', [LiveController::class, 'index'])->name('live.index');
Route::get('live/{id}', [LiveController::class, 'show'])->name('live.show');
Route::get('article', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::view('contact', 'contact')->name('contact');
