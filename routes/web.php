<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/barang',\App\Http\Controllers\BarangController::class);
Route::resource('/supplier',\App\Http\Controllers\SupplierController::class);