<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PartnerController;

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');
use App\Http\Controllers\TransaksiController;


Route::resource('profile', ProfileController::class);
Route::resource('reports', ReportController::class);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::resource('partners', PartnerController::class);
Route::get('/', [ProfileController::class, 'index']);

Route::resource('transaksi', TransaksiController::class);
Route::get('/', [TransaksiController::class, 'index']);
Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
