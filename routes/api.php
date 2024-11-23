<?php

use App\Http\Controllers\Api\JobsListingsController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
//

Route::apiResource('job_listings', JobsListingsController::class);
