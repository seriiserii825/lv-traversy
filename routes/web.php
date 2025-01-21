<?php

use App\Http\Controllers\JobListings;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/jobs', [JobListings::class, 'index']);
Route::get('/jobs/create', function () {
    return view('jobs.create');
});


