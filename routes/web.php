<?php

use App\Http\Controllers\jenis as ControllersJenis;
use App\Http\Controllers\jenisController;
use App\Http\Controllers\pegawai;
use App\Http\Controllers\ruang;
use App\Models\jenis;
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
    return view('dashboard');
});
//jenis
Route::get('/jenis', [ControllersJenis::class,'index']);
Route::get('/jenis/create', [ControllersJenis::class,'create']);
Route::post('/jenis/store', [ControllersJenis::class,'store']);

Route::get('/jenis/hapus/{id}',[ControllersJenis::class,'destroy']);
Route::get('/jenis/edit/{id}',[ControllersJenis::class,'edit']);
Route::post('/jenis/update',[ControllersJenis::class,'update']);

//pegawai
Route::get('/pegawai', [pegawai::class,'index']);
Route::get('/pegawai/create', [pegawai::class,'create']);
Route::post('/pegawai/store', [pegawai::class,'store']);

Route::get('/pegawai/hapus/{id}',[pegawai::class,'destroy']);
Route::get('/pegawai/edit/{id}',[pegawai::class,'edit']);
Route::post('/pegawai/update',[pegawai::class,'update']);

//ruang
Route::get('/ruang', [ruang::class,'index']);
Route::get('/ruang/create', [ruang::class,'create']);
Route::post('/ruang/store', [ruang::class,'store']);

Route::get('/ruang/hapus/{id}',[ruang::class,'destroy']);
Route::get('/ruang/edit/{id}',[ruang::class,'edit']);
Route::post('/ruang/update',[ruang::class,'update']);