<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\BahanMukenahController;
use App\Http\Controllers\MerkMukenahController;
use App\Http\Controllers\RincianProdukController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/tambah',  [KotaController::class, 'tambah']);
Route::get('/lihatdata', [KotaController::class, 'index']);

Route::get('/LDKota', [KotaController::class, 'index']);
Route::get('/TDKota', [KotaController::class, 'tambah']);
Route::post('/LDKota', [KotaController::class, 'store']);
Route::get('/kota/{asal_id}', [KotaController::class, 'edit']);
Route::post('/kota/update', [KotaController::class, 'update']);
Route::get('/HDKota/{asal_id}', [KotaController::class, 'hapus']);

Route::get('/LDBahan', [BahanMukenahController::class, 'index']);
Route::get('/TDBahan', [BahanMukenahController::class, 'tambah']);
Route::post('/LDBahan', [BahanMukenahController::class, 'store']);
Route::get('/bahan/{bahan_id}', [BahanMukenahController::class, 'edit']);
Route::post('/bahan/update}', [BahanMukenahController::class, 'update']);
Route::get('/HDBahan/{bahan_id}', [BahanMukenahController::class, 'hapus']);

Route::get('/LDMerk', [MerkMukenahController::class, 'index']);
Route::get('/TDMerk', [MerkMukenahController::class, 'tambah']);
Route::post('/LDMerk', [MerkMukenahController::class, 'store']);
Route::get('/merk/{merk_id}', [MerkMukenahController::class, 'edit']);
Route::post('/merk/update', [MerkMukenahController::class, 'update']);
Route::get('/HDMerk/{merk_id}', [MerkMukenahController::class, 'hapus']);

Route::get('/', [RincianProdukController::class, 'index']);
Route::get('/harga', [RincianProdukController::class, 'harga']);
Route::get('/populer', [RincianProdukController::class, 'populer']);
Route::get('/TDRP', [RincianProdukController::class, 'tambah']);
Route::post('/', [RincianProdukController::class, 'store']);
Route::get('/rp/{produk_id}', [RincianProdukController::class, 'edit']);
Route::post('/rp/update', [RincianProdukController::class, 'update']);
Route::get('/HDrinc_pro/{produk_id}', [RincianProdukController::class, 'hapus']);
