<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\UserController;
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
    
    Route::prefix('undangan')->group(function(){
        Route::get('/', [UndanganController::class, 'index'])->name('undangan');
        Route::get('undangan/import', [UndanganController::class, 'import'])->name('undangan.import');
        Route::post('undangan/import', [UndanganController::class, 'proccessImport'])->name('undangan.proccess-import');
        Route::get('undangan/create', [UndanganController::class, 'create'])->name('undangan.create');
        Route::post('undangan/create', [UndanganController::class, 'store'])->name('undangan.store');
    });

    Route::prefix('user')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('user');
    });

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
Auth::routes();


