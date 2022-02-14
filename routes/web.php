<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    
    $data = ['comics' => config('comics'), 'nomePagina' => 'Dc Comics - Home'];

    return view('guest.home', $data);
})->name('home');

Route::get('comic/{id}', function ($id) {
    $collection = collect(config('comics'));
    $comic = $collection->where('id', $id);

    // dd($comic->count());
    if ($comic->count() === 0) {
        abort(404);
    }

    $singleComic = '';
    foreach ($comic as $value) {
        $singleComic = $value;
    }

    return view('guest.comic', [
        'comic' => $singleComic,
        'nomePagina' => $singleComic['title']
    ]);
})->name('comic');

Route::get('/characters', function () {
    return view('guest.characters');
})->name('characters');

Route::get('/collectibles', function () {
    return view('guest.collectibles');
})->name('collectibles');

Route::get('/fans', function () {
    return view('guest.fans');
})->name('fans');

Route::get('/games', function () {
    return view('guest.games');
})->name('games');

Route::get('/movies', function () {
    return view('guest.movies');
})->name('movies');

Route::get('/news', function () {
    return view('guest.news');
})->name('news');

Route::get('/shop', function () {
    return view('guest.shop');
})->name('shop');

Route::get('/tv', function () {
    return view('guest.tv');
})->name('tv');

Route::get('/videos', function () {
    return view('guest.videos');
})->name('videos');




