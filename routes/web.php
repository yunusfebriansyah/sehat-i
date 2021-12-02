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

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Sehat.i | Aplikasi Penyedia Informasi Kesehatan'
    ]);
});

Route::get('/ruang-bantu', function () {
    return view('pages.ruang-bantu', [
        'title' => 'Ruang Bantu'
    ]);
});

Route::get('/simpan', function () {
    return view('pages.simpan', [
        'title' => 'Item Tersimpan'
    ]);
});

Route::get('/kebutuhan/tips-isoma', function () {
    return view('pages.tips-isoma', [
        'title' => 'Panduan Isoma'
    ]);
});

