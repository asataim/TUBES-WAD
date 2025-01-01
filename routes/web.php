<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\TransaksiController;
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
<<<<<<< Updated upstream
use App\Http\Controllers\TransaksiController;

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');


Route::resource('profile', ProfileController::class);
Route::resource('reports', ReportController::class);
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::resource('partners', PartnerController::class);
Route::get('/', [ProfileController::class, 'index']);

Route::resource('transaksi', TransaksiController::class);
Route::get('/', [TransaksiController::class, 'index']);
Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');

use App\Http\Controllers\ReportController;


// Route::get('/', [MainController::class, 'index'])->name('main');
// Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');


// Route::resource('profile', ProfileController::class);
// Route::resource('reports', ReportController::class);
// Route::get('/about', [AboutController::class, 'index'])->name('about');
// Route::resource('partners', PartnerController::class);
// Route::get('/', [ProfileController::class, 'index']);

// Route::resource('transaksi', TransaksiController::class);
// Route::get('/', [TransaksiController::class, 'index']);
// Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');

Route::resource('transaksi', TransaksiController::class)->except(['create', 'edit', 'show']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
