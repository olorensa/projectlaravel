<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profilecontroller;
use App\Http\Controllers\UmurController;
use App\Http\Controllers\KaryawanController;

use App\Http\Middleware\CheckAge;

Route::get('/', function () {
    return view('welcome');
});




Route::fallback(function(){
    return "halaman 404 | not found";
});
// Route::get();
// Route::post();
// Route::put('profile/{id}');


route::resource('profile', Profilecontroller::class);

route::match(['GET','POST'], 'jangan_dibuka', function(){
    return "maaf halama ini tidak boleh dibuka";
});


// Middleware
Route::get('cek_umur_saya', [UmurController::Class, 'ShowForm']);
Route::post('cek_proses', [UmurController::Class, 'cekProses'])->name('proses');

route::get('home', function() {
    return "Sudah cukup umur";
})->middleware(CheckAge::class);



//controller
route::get('karyawan', [KaryawanController::Class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
