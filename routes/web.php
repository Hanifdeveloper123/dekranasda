<?php

use App\Http\Controllers\UserController;
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
    return view('landing.index');
});

Route::get('landing', [UserController::class, 'index'])->name('index');
Route::get('detail', [UserController::class, 'detail'])->name('detail');
Route::get('product', [UserController::class, 'product'])->name('product');
Route::get('kontak', [UserController::class, 'kontak'])->name('kontak');
Route::get('tata_cara', [UserController::class, 'tata_cara'])->name('tata_cara');
Route::get('anggota', [UserController::class, 'anggota'])->name('anggota');
Route::get('kegiatan', [UserController::class, 'kegiatan'])->name('kegiatan');
