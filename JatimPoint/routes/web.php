<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kategori', function () {
    return view('kategori');
});

//kategori
Route::get('/pantai', function () {
    return view('kategoriPantai');
});
Route::get('/danau', function () {
    return view('kategoriDanau');
});
Route::get('/sungai', function () {
    return view('kategoriSungai');
});
Route::get('/gunung', function () {
    return view('kategoriGunung');
});
Route::get('/hutan', function () {
    return view('kategoriHutan');
});
Route::get('/airTerjun', function () {
    return view('kategoriAirTerjun');
});

Route::get('/populer', function () {
    return view('populer');
});

// wisata
Route::get('/bromo', function () {
    return view('bromo');
});

Route::get('/ijen', function () {
    return view('ijen');
});

Route::get('/semeru', function () {
    return view('semeru');
});

Route::get('/arjuno', function () {
    return view('arjuno');
});

Route::get('/sukamande', function () {
    return view('sukamande');
});

Route::get('/balekambang', function () {
    return view('balekambang');
});

Route::get('/papuma', function () {
    return view('papuma');
});

Route::get('/klayar', function () {
    return view('klayar');
});

Route::get('/maron', function () {
    return view('maron');
});

Route::get('/cinet', function () {
    return view('cinet');
});

Route::get('/sarangan', function () {
    return view('sarangan');
});

Route::get('/gumbolo', function () {
    return view('gumbolo');
});

Route::get('/tumpaksewu', function () {
    return view('tumpaksewu');
});
