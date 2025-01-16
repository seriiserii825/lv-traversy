<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/jobs', function () {
    return view('jobs.index');
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});


