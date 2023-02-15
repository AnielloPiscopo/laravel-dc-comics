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

Route::prefix('Admin')->name('Admin.pages.')->group(function () {
    Route::get('/', function () {
        return view('Admin.pages.home');
    })->name('home');
    
    Route::resource('comics',AdminComicController::class);

    Route::get('/characters', function () {
        return view('Admin.pages.characters');
    })->name('characters');

    Route::get('/movies', function () {
        return view('Admin.pages.movies');
    })->name('movies');

    Route::get('/tv', function () {
        return view('Admin.pages.tv');
    })->name('tv');

    Route::get('/games', function () {
        return view('Admin.pages.games');
    })->name('games');

    Route::get('/collectibles', function () {
        return view('Admin.pages.collectibles');
    })->name('collectibles');

    Route::get('/videos', function () {
        return view('Admin.pages.videos');
    })->name('videos');

    Route::get('/fans', function () {
        return view('Admin.pages.fans');
    })->name('fans');

    Route::get('/news', function () {
        return view('Admin.pages.news');
    })->name('news');

    Route::get('/shop', function () {
        return view('Admin.pages.shop');
    })->name('shop');
});

Route::prefix('')->name('Guest.pages.')->group(function () {
    Route::get('/', function () {
        return view('Guest.pages.home');
    })->name('home');

    Route::get('/comics', [GuestComicController::class , 'index'])->name('comics');

    Route::get('/characters', function () {
        return view('Guest.pages.characters');
    })->name('characters');

    Route::get('/movies', function () {
        return view('Guest.pages.movies');
    })->name('movies');

    Route::get('/tv', function () {
        return view('Guest.pages.tv');
    })->name('tv');

    Route::get('/games', function () {
        return view('Guest.pages.games');
    })->name('games');

    Route::get('/collectibles', function () {
        return view('Guest.pages.collectibles');
    })->name('collectibles');

    Route::get('/videos', function () {
        return view('Guest.pages.videos');
    })->name('videos');

    Route::get('/fans', function () {
        return view('Guest.pages.fans');
    })->name('fans');

    Route::get('/news', function () {
        return view('Guest.pages.news');
    })->name('news');

    Route::get('/shop', function () {
        return view('Guest.pages.shop');
    })->name('shop');
});