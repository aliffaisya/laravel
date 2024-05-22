<?php

use App\Http\Controllers\DasbhoardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * HTTP Method:
 * 1. Get   : untuk menampilkan
 * 2. Post  : untuk mengirim data
 * 3. put   : untuk mengupdate data
 * 4. Delete: untuk menghapus data
 */

//route unutk menampilkan teks salam
Route::get('admin/dashboard', [DasbhoardController::class, 'index']);