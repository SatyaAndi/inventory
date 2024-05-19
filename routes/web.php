<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenerimaanBarangController;
use App\Http\Controllers\PengeluaranBarangController;
use App\Http\Controllers\DashboardController;



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

Route::get('/', function ()
 { return view('welcome');});

// Route untuk Barang
Route::resource('barang', BarangController::class);

// Route untuk Penerimaan Barang
Route::resource('penerimaan_barang', PenerimaanBarangController::class);

// Route untuk Pengeluaran Barang
Route::resource('pengeluaran_barang', PengeluaranBarangController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');