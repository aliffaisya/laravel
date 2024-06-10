<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DasbhoardController;
use App\Http\Controllers\StudentController;
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

// route untuk menampilkan halaman student
Route::get('admin/student', [StudentController::class, 'index']); 

//
Route::get('admin/courses', [CoursesController::class, 'index']);

// route untuk menampilkan halaman tambah student
Route::get('admin/student/create', [StudentController::class, 'create']); 

// route untuk mengirim data student baru
Route::post('admin/student/store', [StudentController::class, 'store']);

//route untuk menampilkan halamn form edit student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

//route untuk menambahkan edit student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

//route untuk menyimpan hasil update
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

//route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);

// route untuk menampilkan halaman tambah student
Route::get('admin/courses/create', [CoursesController::class, 'create']); 

// route untuk mengirim data student baru
Route::post('admin/courses/store', [CoursesController::class, 'store']);

//route untuk menambahkan edit student
Route::get('admin/courses/edit/{id}', [CoursesController::class, 'edit']);

//route untuk menyimpan hasil update
Route::put('admin/courses/update/{id}', [CoursesController::class, 'update']);

//route untuk menghapus student
Route::delete('admin/courses/delete/{id}', [CoursesController::class, 'destroy']);
 