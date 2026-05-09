<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\FansController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\CheckSalesStatusController;


//Controller routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('content', [ContentController::class, 'index'])->name('content.index');
Route::get('content/{id}', [ContentController::class, 'show'])->name('content.show');
Route::get('live', [LiveController::class, 'index'])->name('live.index');
Route::get('live/{id}', [LiveController::class, 'show'])->name('live.show');
Route::get('article', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('publication', [PublicationController::class, 'index'])->name('publication.index');
Route::get('publication/{id}', [PublicationController::class, 'show'])->name('publication.show');
Route::get('others', [OthersController::class, 'index'])->name('others.index');
Route::get('others/{id}', [OthersController::class, 'show'])->name('others.show');
Route::get('fans', [FansController::class, 'index'])->name('fans.index');
Route::get('fans/{id}', [FansController::class, 'show'])->name('fans.show');
Route::get('contact', [ContactFormController::class, 'index'])->name('contactform');
Route::get('status', [CheckSalesStatusController::class, 'index'])->name('status.index');
// Route::view('about', 'about')->name('about');
