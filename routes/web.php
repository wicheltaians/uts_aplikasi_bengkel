<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/barang', \App\Http\Controllers\BarangController::class);
Route::resource('/supplier', \App\Http\Controllers\SupplierController::class);
Route::resource('/customers', \App\Http\Controllers\CustomerController::class);
Route::resource('/keluhan', \App\Http\Controllers\KeluhanController::class);
Route::resource('/kendaraan', \App\Http\Controllers\KendaraanController::class);
Route::resource('/pegawai', \App\Http\Controllers\PegawaiController::class);
