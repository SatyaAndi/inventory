<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\OrderBarangController;
use App\Http\Controllers\OrderDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/adminpage', [HomeController::class, 'page'])->middleware(['auth', 'admin'])->name('admin.adminpage');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::resource('pengeluaran', PengeluaranController::class);

    Route::resource('orderbarang', OrderBarangController::class);
    Route::resource('orderdetail', OrderDetailController::class);
});
Route::resource('penerimaan', PenerimaanController::class);
Route::resource('barang', BarangController::class);
Route::resource('supplier', SupplierController::class);
require __DIR__ . '/auth.php';
