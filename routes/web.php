<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

Route::view('/', 'home')->name('home');

Route::view('about', 'about')->name('about');

//ContentController routes
Route::get('content', [ContentController::class, 'index'])->name('content.index');
Route::get('content/{id}', [ContentController::class, 'show'])->name('content.show');
Route::view('live', 'live')->name('live');
Route::view('contact', 'contact')->name('contact');
