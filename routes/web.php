<?php

use App\Http\Controllers\JobListingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
Route::resource('jobs', JobListingsController::class);

