<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

Route::post('/register1', App\Http\Controllers\Api\RegisterController::class)->name('register1');

Route::get('barang', [BarangController::class, 'index']);
Route::post('barang', [BarangController::class, 'store']);
Route::get('barang/{barang}', [BarangController::class, 'show']);
Route::put('barang/{barang}', [BarangController::class, 'update']);
Route::delete('barang/{barang}', [BarangController::class, 'destroy']);

Route::get('penjualan1', [PenjualanController::class, 'index']);
Route::post('penjualan', [PenjualanController::class, 'store']);
Route::get('penjualan/{penjualan}', [PenjualanController::class, 'show']);
Route::put('penjualan/{penjualan}', [PenjualanController::class, 'update']);
Route::delete('penjualan/{penjualan}', [PenjualanController::class, 'destroy']);
