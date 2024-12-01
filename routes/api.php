<?php

use App\Http\Controllers\Api\JobsListingsController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
//

Route::get('job_listings/create', [JobsListingsController::class, 'create']);
Route::get('job_listings/edit/{id}', [JobsListingsController::class, 'edit']);
Route::apiResource('job_listings', JobsListingsController::class);
