<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('profile', ProfileController::class);
Route::get('/', [ProfileController::class, 'index']);

Route::resource('transaksi', TransaksiController::class);
Route::get('/', [TransaksiController::class, 'index']);
Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
