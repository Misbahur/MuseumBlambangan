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
    return view('/Menu_Utama/beranda',[
        "title" => "Beranda"
    ]);
});

Route::get('/koleksi', function () {
    return view('/Menu_Utama/koleksi',[
        "title" => "Koleksi"
    ]);
});

Route::get('/about', function () {
    return view('/Menu_Utama/AboutUs',[
        "title" => "Tentang"
    ]);
});

Route::get('/contact', function () {
    return view('/Menu_Utama/Contact',[
        "title" => "Kontak"
    ]);
});

Route::get('/form-booking', function () {
    return view('/Tiket/tiket',[
        "title" => "Form-Booking"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
