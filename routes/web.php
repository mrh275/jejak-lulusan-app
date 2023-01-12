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
use App\Http\Controllers\UserController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/daftar-lulusan', [HomeController::class, 'daftarLulusan']);
Route::get('/login/alumni', [HomeController::class, 'loginAlumni'])->name('login')->middleware('guest');
Route::get('/login/admin', [HomeController::class, 'loginAdmin'])->middleware('guest');

// Login route
Route::post('/login/auth', [LoginController::class, 'auth']);
Route::post('/login/alumni', [LoginController::class, 'alumni']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth', 'alumni'])->group(function () {
    // Alumni Route
    Route::get('/alumni', [AlumniController::class, 'dashboard']);
    Route::get('/alumni/{page}', [AlumniController::class, 'page']);

    // Alumni Crud
    Route::resource('/biodata', BiodataController::class);
    Route::resource('/dataorangtua', DataOrangTuaController::class);
    Route::resource('/kuliah', KuliahController::class);
    Route::resource('/pekerjaan', PekerjaanController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    // Admin Route
    Route::get('/admin', [AdminController::class, 'dashboard']);
    Route::get('/admin/{page}', [AdminController::class, 'page']);

    // Admin CRUD
    Route::get('/admin/biodata/{nis}/edit', [BiodataController::class, 'edit']);
    Route::post('/admin/biodata/update/{nis}', [BiodataController::class, 'updateAjax']);
    Route::get('/admin/dataorangtua/{nis}/edit', [DataOrangTuaController::class, 'edit']);
    Route::post('/admin/dataorangtua/update/{nisn}', [DataOrangTuaController::class, 'updateAjax']);
    Route::get('/admin/datakuliah/{nis}/edit', [KuliahController::class, 'edit']);
    Route::post('/admin/datakuliah/update/{nisn}', [KuliahController::class, 'updateAjax']);
    Route::get('/admin/datapekerjaan/{nis}/edit', [PekerjaanController::class, 'edit']);
    Route::post('/admin/datapekerjaan/update/{nisn}', [PekerjaanController::class, 'updateAjax']);
    Route::post('/admin/user/update', [UserController::class, 'updateAccount']);
    Route::post('/admin/role/update/{username}', [UserController::class, 'updateRole']);

    // Export Route
    Route::get('/export-all', [BiodataController::class, 'exportExcel']);
    Route::post('admin/export-angkatan', [ExportLulusanController::class, 'exportAngkatan']);
    Route::get('/admin/get-kelas/{id}', function ($id) {
        $kelas = Kelas::where('tahun_lulus', $id)->get();
        return response()->json($kelas);
    });

    // Import Route
    Route::get('download/format-lulusan', function () {
        return Excel::download(new ImportFormatLulusan, 'format-import-lulusan.xlsx');
    });
    Route::get('download/format-import', function () {
        $file = public_path('importLulusan/format-import-lulusan.xlsx');
        return Response::download($file);
    });
    Route::post('import/data-lulusan', [ExportLulusanController::class, 'importLulusan']);
});
