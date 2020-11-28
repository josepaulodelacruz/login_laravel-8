<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\Auth\RegisterController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\LogoutController;



Route::get('/', function () {
    return view('home');
})->name('home');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//logout
Route::post('/logout', [LogoutController::class, 'index'])->name('logout');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

