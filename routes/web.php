<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', [UserController::class, 'Home']);
Route::get('/Setup_periode', [UserController::class, 'Home']);
Route::get('/Tambah', [UserController::class, 'Tambah']);
Route::get('/Tambah-periode', [UserController::class, 'Tambah1']);
Route::get('/Hapus/{id}', [UserController::class, 'Hapus']);
Route::get('/Hapus1/{id_Periode}', [UserController::class, 'Hapus1']);
Route::get('/Login', [LoginController::class, 'Login']);
Route::get('/Edit/{id}', [UserController::class, 'Edit']);
Route::get('/Edit1/{id_Periode}', [UserController::class, 'Edit1']);
Route::post('/Update/{id}', [UserController::class, 'Update']);
Route::post('/Update1/{id_Periode}', [UserController::class, 'Update1']);
Route::post('/Store', [UserController::class, 'Store']);
Route::post('/Store1', [UserController::class, 'Store1']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('login.perform');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');