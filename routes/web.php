<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\SppController;
use App\Models\Kelas;
use App\Models\Transaksi;

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
Route::get('/', [LoginController::class,'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('user', [UserController::class, 'index']);
Route::get('user/tambah', [UserController::class, 'create']);
Route::post('user/simpan', [UserController::class, 'store']);
Route::get('user/edit/{id}', [UserController::class, 'show']);
Route::post('user/update/{id}', [UserController::class, 'update']);
Route::get('user/delete/{id}', [UserController::class, 'destroy']);

Route::get('kelas', [KelasController::class, 'index']);
Route::get('kelas/tambah', [kelasController::class, 'create']);
Route::post('kelas/simpan', [KelasController::class, 'store']);
Route::get('kelas/edit/{id}', [KelasController::class, 'show']);
Route::post('kelas/update/{id}', [KelasController::class, 'update']);
Route::get('kelas/delete/{id}', [KelasController::class, 'destroy']);

Route::get('spp', [SppController::class, 'index']);
Route::get('spp/tambah', [SppController::class, 'create']);
Route::post('spp/simpan', [SppController::class, 'store']);
Route::get('spp/edit/{id}', [SppController::class, 'show']);
Route::post('spp/update/{id}', [SppController::class, 'update']);
Route::get('spp/delete/{id}', [SppController::class, 'destroy']);

Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/tambah', [SiswaController::class, 'create']);
Route::post('siswa/simpan', [SiswaController::class, 'store']);
Route::get('siswa/edit/{nis}', [SiswaController::class, 'show']);
Route::post('siswa/update/{nis}', [SiswaController::class, 'update']);
Route::get('siswa/delete/{nis}', [SiswaController::class, 'destroy']);

Route::get('transaksi', [TransaksiController::class, 'index']);
Route::get('transaksi/tambah', [TransaksiController::class, 'create']);
Route::post('transaksi/simpan', [TransaksiController::class, 'store']);
Route::get('transaksi/edit/{id_transaksi}', [TransaksiController::class, 'show']);
Route::post('transaksi/update/{id_transaksi}', [TransaksiController::class, 'update']);
Route::get('transaksi/delete/{id_transaksi}', [TransaksiController::class, 'destroy']);