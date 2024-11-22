<?php

use App\Http\Controllers\Api\JobsListingsController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
//

Route::resource('job_listings', JobsListingsController::class);
