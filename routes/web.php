<?php

use App\Http\Controllers\JobListingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
Route::resource('jobs', JobListingsController::class);
// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// });
//

