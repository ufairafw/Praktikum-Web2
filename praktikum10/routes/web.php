<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Bikin routing untuk dashboard pake controller
Route::get('/dashboard', [DashboardController::class, 'index']);
// Bikin routing untuk produk pake controller
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/kategori_produk', [KategoriController::class, 'index'])->name('kategori_produk');