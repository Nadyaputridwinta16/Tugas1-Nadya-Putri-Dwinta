<?php

use App\Http\Controllers\BuahController;
use App\Http\Controllers\dataDiriController;
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
    return view('welcome');
});

Route::get('array',[dataDiriController::class,'array']);
Route::get('buah',[BuahController::class,'index'])->name('home');
Route::get('/tambah_data',[BuahController::class,
'tambah_data'])->name('add');
Route::post('/simpan_data',[BuahController::class,
'simpan_data'])->name('simpan');
Route::delete('/hapus',[BuahController::class,
'hapus'])->name('hapus');
Route::get('/edit/{id}',[BuahController::class,'edit'])->name('edit');
Route::put('/update',[BuahController::class,'update'])->name('update');



