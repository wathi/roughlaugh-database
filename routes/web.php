<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\FansController;
use App\Http\Controllers\CacheController;

//Controller routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/info/roughlaugh', 'info.roughlaugh')->name('info.roughlaugh');
Route::view('/info/content', 'info.content')->name('info.content');
Route::view('/member/index', 'member.index')->name('member.index');
Route::view('/member/saito-arisa', 'member.saito-arisa')->name('member.saito-arisa');
Route::view('/member/sasaki-funa', 'member.sasaki-funa')->name('member.sasaki-funa');
Route::view('/member/takanashi-yui', 'member.takanashi-yui')->name('member.takanashi-yui');
Route::view('/member/natsume-ryoka', 'member.natsume-ryoka')->name('member.natsume-ryoka');
Route::view('/member/nagamatsu-haru', 'member.nagamatsu-haru')->name('member.nagamatsu-haru');
Route::view('/member/hibino-meina', 'member.hibino-meina')->name('member.hibino-meina');
Route::view('/member/fujisaki-miku', 'member.fujisaki-miku')->name('member.fujisaki-miku');
Route::view('/member/yoshimura-monami', 'member.yoshimura-monami')->name('member.yoshimura-monami');
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
Route::get('/clear-cache', [CacheController::class, 'clear']);
