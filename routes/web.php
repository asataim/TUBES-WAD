<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
<<<<<<< Updated upstream
use App\Http\Controllers\ReportController;
=======
use App\Http\Controllers\AdminController;
>>>>>>> Stashed changes

Route::get('/', function () {
    return view('welcome');
});


<<<<<<< Updated upstream
Route::resource('profile', ProfileController::class);
Route::get('/', [ProfileController::class, 'index']);
Route::resource('reports', ReportController::class);
Route::get('/', [ReportController::class, 'index']);

=======
// Route::resource('profile', ProfileController::class);
// Route::get('/', [ProfileController::class, 'index']);
Route::resource('admin', AdminController::class);
Route::get('/', [AdminController::class, 'index']);
>>>>>>> Stashed changes
