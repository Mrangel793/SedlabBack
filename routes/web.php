<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\VerificationController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes([
    'verify' => true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/miPerfil', function () {
    return view('user.miperfil');
});

Route::get('/empresa', function () {
    return view('emprendedor.empresas');
});

Route::get('/home', function () {
    return view('/home');
})->middleware('auth', 'verified')->name('/home');
