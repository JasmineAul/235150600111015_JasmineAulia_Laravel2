<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Illuminate\Container\Attributes\Auth;

Route::get('/', function () {
    return view('index');
});

//registrasi
Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
// Route::get('/registrasi', function () {
//     return view('registrasi');
// });
// //login
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
//delete blogs
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
//edit blogs
// Rute untuk menampilkan form edit
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
// Rute untuk menyimpan perubahan
Route::post('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');


Route::get('/blogs', [BlogController::class, 'showBlogs']);
//login lalu ke tampilan blogs
Route::get('/blogs', [BlogController::class, 'showBlogs'])->name('blog.showBlogs');

Route::get('/tambah', [BlogController::class, 'tambahBlog']);

Route::post('/tambah', [BlogController::class, 'createBlog']);