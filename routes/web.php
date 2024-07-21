<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/rsvp', [HomeController::class, 'rsvp'])->name('rsvp');
Route::post('/ucapan', [HomeController::class, 'ucapan'])->name('ucapan');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('undangan', [DashboardController::class, 'undangan'])->name('undangan');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
Auth::routes();


