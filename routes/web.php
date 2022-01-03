<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RuangBantuController;
use App\Models\Ambulance;
use App\Models\Isolasi;
use App\Models\Oxygen;
use App\Models\Plasma;
use App\Models\Puskes;
use App\Models\Swap;
use App\Models\Vaksin;
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

Route::post('/ruang-bantu/{ruang_bantu:slug}/comment', [RuangBantuController::class, 'comment'])->middleware('auth');
Route::resource('/ruang-bantu', RuangBantuController::class);

Route::get('/simpan', function () {
    return view('pages.simpan', [
        'title' => 'Item Tersimpan'
    ]);
});

Route::get('/kebutuhan/info-covid', function () {
    return view('pages.info-covid', [
        'title' => 'Informasi Mengenai COVID-19'
    ]);
});

Route::get('/kebutuhan/oksigen', function () {
    return view('pages.konten-kebutuhan', [
        'title' => "Kebutuhan Oksigen",
        'heading' => "Oksigen",
        'items' => Oxygen::paginate(15)
    ]);
});

Route::get('/kebutuhan/ambulans', function () {
    return view('pages.konten-kebutuhan', [
        'title' => "Kebutuhan Ambulans",
        'heading' => "Ambulans",
        'items' => Ambulance::paginate(15)
    ]);
});

Route::get('/kebutuhan/plasma', function () {
    return view('pages.konten-kebutuhan', [
        'title' => "Kebutuhan Plasma",
        'heading' => "Plasma",
        'items' => Plasma::paginate(15)
    ]);
});

Route::get('/kebutuhan/puskesmas', function () {
    return view('pages.konten-kebutuhan', [
        'title' => "Kebutuhan Puskesmas",
        'heading' => "Puskesmas",
        'items' => Puskes::paginate(15)
    ]);
});

Route::get('/kebutuhan/swab', function () {
    return view('pages.konten-kebutuhan', [
        'title' => "Kebutuhan Swap",
        'heading' => "Swap",
        'items' => Swap::paginate(15)
    ]);
});

Route::get('/kebutuhan/vaksin', function () {
    return view('pages.konten-kebutuhan', [
        'title' => "Kebutuhan Vaksin",
        'heading' => "Vaksin",
        'items' => Vaksin::paginate(15)
    ]);
});

Route::get('/kebutuhan/isolasi', function () {
    return view('pages.konten-kebutuhan', [
        'title' => "Kebutuhan Isolasi",
        'heading' => "Isolasi",
        'items' => Isolasi::paginate(15)
    ]);
});

Route::get('/akun', function () {
    return view('pages.akun', [
        'title' => "Profile " . auth()->user()->nama
    ]);
})->middleware('auth');

Route::get('/login', function(){
    return view('pages.login', [
        'title' => "Login"
    ]);
})->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/register', function(){
    return view('pages.register', [
        'title' => "Registrasi"
    ]);
})->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
