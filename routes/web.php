<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ObatTransaksiController;
use App\Http\Controllers\DistributorObatController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('distributor-obats', DistributorObatController::class);
Route::resource('obats', ObatController::class);
Route::resource('penjualans', ObatTransaksiController::class);

Route::get('/cetak{penjualan}', [ObatTransaksiController::class, 'cetak'])->name('cetak');
