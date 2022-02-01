<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/daftar-lulusan', [HomeController::class, 'daftarLulusan']);
Route::get('/pengumuman-kelulusan', [HomeController::class, 'pengumuman']);
Route::get('/login', [HomeController::class, 'login'])->name('login')->middleware('guest');

// Admin Route
Route::get('/alumni', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/alumni/{page}', [AdminController::class, 'page'])->middleware('auth');

Route::post('/login/auth', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout']);
