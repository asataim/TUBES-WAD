<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::resource('profile', ProfileController::class);
Route::resource('reports', ReportController::class);

