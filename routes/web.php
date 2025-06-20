<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\front\PdfControllerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobListingsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs/search', [JobListingsController::class, 'search'])->name('jobs.search');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('jobs', JobListingsController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/bookmarks', [BookmarkController::class, 'index'])->name('bookmarks');
    Route::post('/bookmarks/{job}', [BookmarkController::class, 'store'])->name('bookmarks.store');
    Route::delete('/bookmarks/{job}', [BookmarkController::class, 'destroy'])->name('bookmarks.destroy');
    Route::post('/jobs/{job}/apply', [ApplicantController::class, 'store'])->name('applicant.store');
    Route::delete('/applicant/{applicant}', [ApplicantController::class, 'destroy'])->name('applicant.destroy');
});
Route::resource('jobs', JobListingsController::class)->except(['create', 'edit', 'update', 'destroy']);
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'loginStore'])->name('login.store');
    Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'registerStore'])->name('register.store');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/file-upload', [FileUploadController::class, 'index'])->name('file.upload');
Route::post('/file-upload', [FileUploadController::class, 'store'])->name('file.store');
Route::delete('/file-upload/{id}', [FileUploadController::class, 'destroy'])->name('file.destroy');


Route::get('/pdf-preview', [PdfControllerController::class, 'preview']);
Route::get('/pdf', [PdfControllerController::class, 'generate']);

