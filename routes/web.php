<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeriodeController;


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
//SETUP RUANG LINGKUP
Route::get('/HomeAuditor', [AuditorController::class, 'Unit']);

//LOGIN DAN LOGOUT
Route::get('/Login', [LoginController::class, 'Login']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('login.perform');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');