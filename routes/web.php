<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pengenalancontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\StaffBranchController;


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

Route::get('/hello', function () {
    return view('welcome');
});

Route::get('/welcome', function() {
    echo '<center>';
    echo "<u>Halo semuanya, apa kabar?</u> <br>";
    echo "<u>Pada kali ini kita sedang belajar route basic<u>";
    echo '</center>';

});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1');
});

Route::get('/page2', function () {
    return view('page2');
});

Route::get('/page3', function () {
    return view('page3');
});

Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{hobby}', function ($nama,$umur,$alamat,$jenis_kelamin,$hobby) {
    return view('page1.biodata', compact('nama','umur','alamat','jenis_kelamin','hobby'));
});

// route optional parameter

Route::get('/pesanan/{a}', function ($a ='mohon maaf material anda tidak ada') {
    return view('page1.pesanan', compact('a'));
});

Route::get('/pengenalan', [App\Http\Controllers\Pengenalancontroller::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}',[App\Http\Controllers\Pengenalancontroller::class, 'intro']);

Route::get('/siswa',[App\Http\Controllers\Pengenalancontroller::class, 'siswa']);

Route::get('/menu',[App\Http\Controllers\LatihanController::class, 'menu']);

Route::get('/kampus',[App\Http\Controllers\LatihanController::class, 'kampus']);

Route::get('/tv',[App\Http\Controllers\LatihanController::class, 'tv']);

Route::get('/belanja',[App\Http\Controllers\LatihanController::class, 'belanja']);

Route::get('/post', [Postcontroller::class, 'index']);

Route::get('/sb', [StaffBranchController::class, 'index']);










 




