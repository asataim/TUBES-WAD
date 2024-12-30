<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('profile', ProfileController::class);
Route::get('/', [ProfileController::class, 'index']);
Route::resource('reports', ReportController::class);
Route::get('/', [ReportController::class, 'index']);

