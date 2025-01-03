<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('profile', ProfileController::class);
// Route::get('/', [ProfileController::class, 'index']);
Route::resource('admin', AdminController::class);
Route::get('/', [AdminController::class, 'index']);
