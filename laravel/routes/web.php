<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', function () {
    return redirect('/dashboard');
});
Route::get('/barang',[BarangController::class, 'index']);
Route::get('/dashboard',[DashBoardController::class, 'index']);
Route::get('barang/create',[BarangController::class, 'create']);
Route::post('barang/store',[BarangController::class, 'store']);
Route::get('barang/{sku}/restok',[BarangController::class, 'restok']);
Route::post('barang/{sku}/restok/update',[BarangController::class, 'restok_update']);
Route::get('/api/barang/{sku}',[BarangController::class, 'api_barang']);


Route::get('/transaksi',[TransaksiController::class, 'index']);
Route::get('transaksi/create',[TransaksiController::class, 'create']);
Route::post('transaksi/store',[TransaksiController::class, 'store']);