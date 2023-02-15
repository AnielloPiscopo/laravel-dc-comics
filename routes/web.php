<?php

use App\Http\Controllers\Admin\ComicController as AdminComicController;
use App\Http\Controllers\Guest\ComicController as GuestComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('Admin')->name('Admin.')->group(function () {
    Route::resource('comics',AdminComicController::class);

    Route::get('/', function () {
        return view('Admin.home');
    })->name('home');

    Route::get('/characters', function () {
        return view('Admin.characters');
    })->name('characters');

    Route::get('/movies', function () {
        return view('Admin.movies');
    })->name('movies');

    Route::get('/tv', function () {
        return view('Admin.tv');
    })->name('tv');

    Route::get('/games', function () {
        return view('Admin.games');
    })->name('games');

    Route::get('/collectibles', function () {
        return view('Admin.collectibles');
    })->name('collectibles');

    Route::get('/videos', function () {
        return view('Admin.videos');
    })->name('videos');

    Route::get('/fans', function () {
        return view('Admin.fans');
    })->name('fans');

    Route::get('/news', function () {
        return view('Admin.news');
    })->name('news');

    Route::get('/shop', function () {
        return view('Admin.shop');
    })->name('shop');
});

Route::prefix('')->name('Guest.')->group(function () {
    Route::get('/', function () {
        return view('Guest.home');
    })->name('home');

    Route::get('/comics', [GuestComicController::class , 'index'])->name('comics');

    Route::get('/characters', function () {
        return view('Guest.characters');
    })->name('characters');

    Route::get('/movies', function () {
        return view('Guest.movies');
    })->name('movies');

    Route::get('/tv', function () {
        return view('Guest.tv');
    })->name('tv');

    Route::get('/games', function () {
        return view('Guest.games');
    })->name('games');

    Route::get('/collectibles', function () {
        return view('Guest.collectibles');
    })->name('collectibles');

    Route::get('/videos', function () {
        return view('Guest.videos');
    })->name('videos');

    Route::get('/fans', function () {
        return view('Guest.fans');
    })->name('fans');

    Route::get('/news', function () {
        return view('Guest.news');
    })->name('news');

    Route::get('/shop', function () {
        return view('Guest.shop');
    })->name('shop');
});