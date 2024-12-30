<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('profile', ProfileController::class);
Route::get('/', [ProfileController::class, 'index']);
