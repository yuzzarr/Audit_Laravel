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
Route::get('/Tambah', [UserController::class, 'Tambah']);
Route::get('/Hapus/{id}', [UserController::class, 'Hapus']);
Route::get('/Edit/{id}', [UserController::class, 'Edit']);
Route::post('/Update/{id}', [UserController::class, 'Update']);
Route::post('/Store', [UserController::class, 'Store']);
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
