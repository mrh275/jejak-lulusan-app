<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DataHandlerController;

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
Route::get('/login/alumni', [HomeController::class, 'loginAlumni'])->name('login')->middleware('guest');
Route::get('/login/admin', [HomeController::class, 'loginAdmin'])->middleware('guest');

// Alumni Route
Route::get('/alumni', [AlumniController::class, 'dashboard'])->middleware('alumni');
Route::get('/alumni/{page}', [AlumniController::class, 'page'])->middleware('alumni');

// Admin Route
Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/admin/{page}', [AdminController::class, 'page'])->middleware('auth');

Route::post('/login/auth', [LoginController::class, 'auth']);
Route::post('/login/alumni', [LoginController::class, 'alumni']);
Route::get('/logout', [LoginController::class, 'logout']);

// Crud
Route::resource('/alumni/data', DataHandlerController::class)->middleware('alumni');
Route::resource('/admin/data', DataHandlerController::class)->middleware('admin');
