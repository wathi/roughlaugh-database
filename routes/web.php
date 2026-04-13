<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LiveController;

Route::view('/', 'home')->name('home');
Route::view('about', 'about')->name('about');

//ContentController routes
Route::get('content', [ContentController::class, 'index'])->name('content.index');
Route::get('content/{id}', [ContentController::class, 'show'])->name('content.show');
Route::get('live', [LiveController::class, 'index'])->name('live.index');
Route::get('live/{id}', [ContentController::class, 'show'])->name('live.show');
Route::view('contact', 'contact')->name('contact');
