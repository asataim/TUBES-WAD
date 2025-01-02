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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;



Route::middleware('auth')->get('/main', [MainController::class, 'index'])->name('main');
Route::middleware('auth')->get('/homepage', [HomeController::class, 'index'])->name('homepage');
Route::middleware('auth')->resource('profile', ProfileController::class);
Route::middleware('auth')->resource('reports', ReportController::class);
Route::middleware('auth')->get('/about', [AboutController::class, 'index'])->name('about');
Route::middleware('auth')->resource('partners', PartnerController::class);

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware('auth')->resource('transaksi', TransaksiController::class);
Route::middleware('auth')->get('/transaksi', [TransaksiController::class, 'index']);
Route::middleware('auth')->get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::middleware('auth')->get('/transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::middleware('auth')->put('/transaksi/{transaksi}', [TransaksiController::class, 'update'])->name('transaksi.update');


Route::middleware('auth')->resource('admin', AdminController::class);
Route::middleware('auth')->get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::middleware('auth')->resource('produk', ProdukController::class);

#Route::middleware('auth')->get('/reports/pdf', [ReportController::class, 'exportPdf']);
#Route::get('/reports/pdf', [ReportController::class, 'exportPdf'])->name('reports.pdf');

#Route::get('reports/view/pdf', ReportController::class, 'exportPdf');

Route::get('reports/{report}/export-pdf', [ReportController::class, 'exportPdf'])->name('reports.exportPdf');
