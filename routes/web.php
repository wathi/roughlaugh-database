<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ContactController;

Route::view('about', 'about')->name('about');

//Controller routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('content', [ContentController::class, 'index'])->name('content.index');
Route::get('content/{id}', [ContentController::class, 'show'])->name('content.show');
Route::get('live', [LiveController::class, 'index'])->name('live.index');
Route::get('live/{id}', [LiveController::class, 'show'])->name('live.show');
Route::get('article', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('publication', [PublicationController::class, 'index'])->name('publication.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
