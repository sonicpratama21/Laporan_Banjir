<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanBanjirController;
Route::resource('laporan', LaporanBanjirController::class);
Route::get('/', function () {
    return view('welcome');
});
