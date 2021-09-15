<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SesiController;

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

Route::group(['middleware' => 'auth'], function(){

    Route::get('/login', function () {
        return view('welcome');
    });
    
    Route::get('/home', function () {
        return view('home');
    });
});

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

// Route::get('/form-booking', function () {
//     return view('/Tiket/form_registrasi',[
//         "title" => "Form-Booking"
//     ]);
// });

// Route::get('/hasil', function () {
//     return view('/Tiket/form_rombongan',[
//         "title" => "Tiket"
//     ]);
// });

Route::get('/prasejarah', function () {
    return view('/koleksi/prasejarah',[
        "title" => "Prasejarah"
    ]);
});

Route::get('/hindu-budha', function () {
    return view('/koleksi/hindu-budha',[
        "title" => "Hindu-Budha"
    ]);
});

Route::get('/islam', function () {
    return view('/koleksi/islam',[
        "title" => "Islam"
    ]);
});

Route::get('/kolonial', function () {
    return view('/koleksi/kolonial',[
        "title" => "Kolonial"
    ]);
});
// Route::get('/dadi', function () {
//     return view('/Tiket/form_rombongan',[
//             'nama' => 'required|min:1|max:20',
//             'nik' => 'required',
//             'email' => 'required|email',
//             'alamat' => 'required',
//             'tanggal' => 'required',
//             'sesi' => 'required',
//             'kategori' => 'required'
//     ]);
// });
Route::resource('/sesi', 'App\Http\Controllers\SesiController');
Route::resource('/kategori', 'App\Http\Controllers\KategoriController');
// Route::post('/Tiket/form_registrasi', [App\Http\Controllers\BookingController::class, 'store']);
// Route::post('/hasil', 'App\Http\Controllers\BookingController@store');

Route::get('/hasil', 'App\Http\Controllers\HasilController@data');
Route::get('/form-booking', 'App\Http\Controllers\HasilController@add');
Route::post('/hasil', 'App\Http\Controllers\HasilController@cetakdata');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
