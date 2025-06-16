<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Arahkan root "/" ke controller DashboardController@index
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Arahkan "/index" juga ke controller yang sama (jika masih ingin mendukung /index)
Route::get('/index', [DashboardController::class, 'index']);
