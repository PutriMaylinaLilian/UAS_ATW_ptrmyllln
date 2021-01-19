<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;


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
    return view('login');
});


Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/indexpenjual', [AdminController::class, 'indexpenjual']);
Route::get('admin/indexpembeli', [AdminController::class, 'indexpembeli']);
Route::get('admin/indexproduk', [AdminController::class, 'indexproduk']);
Route::get('admin/indexkeranjang', [AdminController::class, 'indexkeranjang']);

Route::get('penjual', [PenjualController::class, 'index']);

Route::get('pembeli', [PembeliController::class, 'index']);
Route::post('storekeranjang', [KeranjangController::class, 'storekeranjang']);

Route::get('register/penjual', [RegisterController::class, 'penjual']);
Route::post('storepenjual', [RegisterController::class, 'storepenjual']);
Route::get('register/pembeli', [RegisterController::class, 'pembeli']);
Route::post('storepembeli', [RegisterController::class, 'storepembeli']);


Route::get('produk', [ProdukController::class, 'index']);
Route::post('produk/store', [ProdukController::class, 'store']);
Route::get('produk/{id}', [ProdukController::class,'show']);
Route::get('produk/edit/{id}', [ProdukController::class,'edit']);
Route::put('produk/update/{id}', [ProdukController::class,'update']);
Route::get('produk/delete/{id}', [ProdukController::class,'delete']);


Route::get('keranjang', [KeranjangController::class, 'index']);
Route::get('keranjang/konfirmasi', [KeranjangController::class, 'konfirmasi']);
Route::post('keranjang/store', [KeranjangController::class, 'store']);
Route::get('keranjang/{id}', [KeranjangController::class,'show']);
Route::get('keranjang/edit/{id}', [KeranjangController::class,'edit']);
Route::put('keranjang/update/{id}', [KeranjangController::class,'update']);
Route::get('keranjang/upload/{id}', [KeranjangController::class,'upload']);
Route::post('keranjang/updatetf/{id}', [KeranjangController::class,'updatetf']);
Route::post('updatekonfir/{id}', [KeranjangController::class,'updatekonfir']);
Route::get('keranjang/delete/{id}', [KeranjangController::class,'delete']);


Route::get('pesanan', [PesananController::class, 'index']);
Route::get('pesanan/terkirim', [PesananController::class, 'terkirim']);
Route::get('pesanan/sampai', [PesananController::class, 'sampai']);
Route::post('updatepesanan/{id}', [PesananController::class, 'updatepesanan']);
Route::post('pesanan/updatesampai', [PesananController::class, 'updatesampai']);

Route::get('/test', [AuthController::class, 'test']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginproses']);
Route::get('/logout', [AuthController::class, 'logout']);
