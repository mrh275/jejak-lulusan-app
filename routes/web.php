<?php

use Whoops\Run;
use App\Models\Kelas;
use App\Exports\ImportFormatLulusan;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\DataHandlerController;
use App\Http\Controllers\DataOrangTuaController;
use App\Http\Controllers\ExportLulusanController;

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

// Portal route
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

// Login route
Route::post('/login/auth', [LoginController::class, 'auth']);
Route::post('/login/alumni', [LoginController::class, 'alumni']);
Route::get('/logout', [LoginController::class, 'logout']);

// Crud
Route::resource('/alumni/data', DataHandlerController::class)->middleware('alumni');
Route::resource('/admin/data', DataHandlerController::class)->middleware('admin');

// Alumni Crud
Route::resource('/biodata', BiodataController::class)->middleware('alumni');
Route::resource('/dataorangtua', DataOrangTuaController::class)->middleware('alumni');
Route::resource('/kuliah', KuliahController::class)->middleware('alumni');
Route::resource('/pekerjaan', PekerjaanController::class)->middleware('alumni');

// Admin CRUD
Route::get('/admin/biodata/{nis}/edit', [BiodataController::class, 'edit'])->middleware('auth');
Route::get('/admin/biodata/update/{nis}', [BiodataController::class, 'updateAjax'])->middleware('auth');
Route::get('/admin/dataorangtua/{nis}/edit', [DataOrangTuaController::class, 'edit'])->middleware('auth');
Route::get('/admin/dataorangtua/update/{nisn}', [DataOrangTuaController::class, 'updateAjax'])->middleware('auth');
Route::get('/admin/datakuliah/{nis}/edit', [KuliahController::class, 'edit'])->middleware('auth');
Route::get('/admin/datakuliah/update/{nisn}', [KuliahController::class, 'updateAjax'])->middleware('auth');
Route::get('/admin/datapekerjaan/{nis}/edit', [PekerjaanController::class, 'edit'])->middleware('auth');
Route::get('/admin/datapekerjaan/update/{nisn}', [PekerjaanController::class, 'updateAjax'])->middleware('auth');

// Export Route
Route::get('/export-all', [BiodataController::class, 'exportExcel'])->middleware('auth');
Route::post('admin/export-angkatan', [ExportLulusanController::class, 'exportAngkatan'])->middleware('auth');
Route::get('/admin/get-kelas/{id}', function($id) {
    $kelas = Kelas::where('tahun_lulus', $id)->get();
    return response()->json($kelas);
})->middleware('auth');

// Import Route
Route::get('download/format-lulusan', function() {
    return Excel::download(new ImportFormatLulusan, 'format-import-lulusan.xlsx');
});
Route::get('download/format-import', function() {
    $file = public_path('importLulusan/format-import-lulusan.xlsx');
    return Response::download($file);
})->middleware('auth');
Route::post('import/data-lulusan', [ExportLulusanController::class, 'importLulusan'])->middleware('auth');