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


Route::middleware('auth')->resource('admin', AdminController::class);
Route::middleware('auth')->get('/', [AdminController::class, 'index']);
