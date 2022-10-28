<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\Barang_masukController;
use App\Http\Controllers\Barang_keluarController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('karyawan', KaryawanController::class);
Route::resource('departement', DepartementController::class);
Route::resource('barang', BarangController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('lokasi', LokasiController::class);
Route::resource('satuan', SatuanController::class);
Route::resource('barang_masuk', Barang_masukController::class);
Route::resource('barang_keluar', Barang_keluarController::class);
Route::resource('supplier', SupplierController::class);
