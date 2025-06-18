<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// Arahkan root "/" ke controller DashboardController@index
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Arahkan "/index" juga ke controller yang sama (jika masih ingin mendukung /index)
Route::get('/index', [DashboardController::class, 'index']);



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


