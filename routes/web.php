<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RuangBantuController;
use App\Http\Controllers\SaveController;
use App\Models\Category;
use App\Models\Need;
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

Route::get('/simpan', [SaveController::class, 'index'])->middleware('auth');
Route::post('/simpan/{need:slug}', [SaveController::class, 'store'])->middleware('auth');
Route::delete('/simpan/{save:id}', [SaveController::class, 'destroy'])->middleware('auth');

Route::get('/kebutuhan/{category:slug}', function (Category $category) {
    return view('pages.konten-kebutuhan', [
        'title' => "Kebutuhan " . $category->name,
        'heading' => $category->name,
        'items' => Need::where('category_id', $category->id)->search(request('search'))->location(request('lokasi'))->where('is_verified', true)->paginate(15)->withQueryString()
    ]);
});

Route::get('/kebutuhan/info-covid', function () {
    return view('pages.info-covid', [
        'title' => 'Informasi Mengenai COVID-19'
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
