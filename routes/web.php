<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\AuditorController;
use App\Http\Controllers\MasterAuditorController;
use App\Http\Controllers\AuditeeController;


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

Route::get('/', function () {
    return view('Landing-page');
});

//ADMIN
//SETUP USER
Route::get('/Home', [UserController::class, 'Home']);
Route::get('/Tambah', [UserController::class, 'Tambah']);
Route::get('/Hapus/{id}', [UserController::class, 'Hapus']);
Route::get('/Edit/{id}', [UserController::class, 'Edit']);

Route::patch('/Update/{id}', 'UserController@Update');

Route::post('/Store', [UserController::class, 'Store']);
Route::post('/Update/{id}', [UserController::class, 'Update']);

//SETUP PERIODE
Route::get('/Setup_periode', [PeriodeController::class, 'Periode']);
Route::get('/Tambah-periode', [PeriodeController::class, 'Tambah1']);
Route::get('/Edit1/{id_Periode}', [PeriodeController::class, 'Edit1']);
Route::get('/Hapus1/{id_Periode}', [PeriodeController::class, 'Hapus1']);
Route::post('/Update1/{id_Periode}', [PeriodeController::class, 'Update1']);
Route::post('/Store1', [PeriodeController::class, 'Store1']);

//SETUP UNIT
Route::get('/Setup_unit', [PeriodeController::class, 'Unit']);
Route::get('/Tambah-unit', [PeriodeController::class, 'TambahUnit']);
Route::post('/StoreUnit', [PeriodeController::class, 'StoreUnit']);
Route::get('/EditUnit/{id_Unit}', [PeriodeController::class, 'EditUnit']);
Route::post('/UpdateUnit/{id_Unit}', [PeriodeController::class, 'UpdateUnit']);
Route::get('/HapusUnit/{id_Unit}', [PeriodeController::class, 'HapusUnit']);

//SETUP PERIODE UNIT
Route::get('/Setup_periode-unit', [PeriodeController::class, 'PeriodeUnit']);
Route::get('/Tambah-periode-unit', [PeriodeController::class, 'TambahPeriodeUnit']);
Route::post('/StorePeriodeUnit', [PeriodeController::class, 'StorePeriodeUnit']);
Route::get('/EditPeriodeUnit/{id_Periode_unit}', [PeriodeController::class, 'EditPeriodeUnit']);
Route::post('/UpdatePeriodeUnit/{id_Periode_unit}', [PeriodeController::class, 'UpdatePeriodeUnit']);
Route::get('/HapusPeriodeUnit/{id_Periode_unit}', [PeriodeController::class, 'HapusPeriodeUnit']);

//AUDITOR
//SETUP FILE DAN RUANG LINGKUP
Route::get('/Setup_file2', [AuditorController::class, 'SetupFile2']);
Route::get('/Tambah-file2', [AuditorController::class, 'TambahFile2']);
Route::post('/StoreFile2', [AuditorController::class, 'StoreFile2']);
Route::get('/EditFile2/{id_Ruang_lingkup}', [AuditorController::class, 'EditFile2']);
Route::post('/UpdateFile2/{id_Ruang_lingkup}', [AuditorController::class, 'UpdateFile2']);
Route::get('/HapusFile2/{id_Ruang_lingkup}', [AuditorController::class, 'HapusFile2']);

//DATA AUDIT
Route::get('/Data_audit2', [AuditorController::class, 'DataAudit2']);
Route::get('/Tambah-file_kta2/{id_File_setup}', [AuditorController::class, 'TambahFileKTA2']);
Route::post('/StoreFileKTA2/{id_File_setup}', [AuditorController::class, 'StoreFileKTA2']);

//MASTER AUDITOR
//TAMBAH ANGGOTA AUDITOR
Route::get('/HomeMasterAuditor', [MasterAuditorController::class, 'HomeMasterAuditor']);
Route::get('/TambahAuditor', [MasterAuditorController::class, 'TambahAuditor']);
Route::post('/StoreAuditor', [MasterAuditorController::class, 'StoreAuditor']);
Route::get('/HapusAuditor/{id_Auditor}', [MasterAuditorController::class, 'HapusAuditor']);

//SETUP FILE DAN RUANG LINGKUP
Route::get('/Setup_file', [MasterAuditorController::class, 'SetupFile']);
Route::get('/Tambah-file', [MasterAuditorController::class, 'TambahFile']);
Route::post('/StoreFile', [MasterAuditorController::class, 'StoreFile']);
Route::get('/EditFile/{id_Ruang_lingkup}', [MasterAuditorController::class, 'EditFile']);
Route::post('/UpdateFile/{id_Ruang_lingkup}', [MasterAuditorController::class, 'UpdateFile']);
Route::get('/HapusFile/{id_Ruang_lingkup}', [MasterAuditorController::class, 'HapusFile']);

//DATA AUDIT
Route::get('/Data_audit', [MasterAuditorController::class, 'DataAudit']);
Route::get('/Tambah-file_kta/{id_File_setup}', [MasterAuditorController::class, 'TambahFileKTA']);
Route::post('/StoreFileKTA/{id_File_setup}', [MasterAuditorController::class, 'StoreFileKTA']);

//AUDITEE
Route::get('/Proses_audit', [AuditeeController::class, 'ProsesAudit']);
Route::get('/Tambah-file-audit/{id_File_setup}', [AuditeeController::class, 'TambahFileAudit']);
Route::post('/StoreFileAudit/{id_File_setup}', [AuditeeController::class, 'StoreFileAudit']);
Route::get('/Tambah-file-feedback/{id_File_setup}', [AuditeeController::class, 'TambahFileFeedback']);
Route::post('/StoreFileFeedback/{id_File_setup}', [AuditeeController::class, 'StoreFileFeedback']);

//LOGIN DAN LOGOUT
Route::get('/Login', [LoginController::class, 'Login']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('login.perform');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');