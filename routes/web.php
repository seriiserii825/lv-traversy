<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobListingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('jobs', JobListingsController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
// Route::resource('jobs', JobListingsController::class)->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
Route::resource('jobs', JobListingsController::class)->except(['create', 'edit', 'update', 'destroy']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
    Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
