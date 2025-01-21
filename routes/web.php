<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobListingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('jobs', JobListingsController::class);

