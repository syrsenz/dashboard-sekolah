<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\profile_sekolah_controller;
use App\Http\Controllers\postingan_controller;
use App\Http\Controllers\kategori_controller;
use App\Http\Controllers\siswa_controller;
use App\Http\Controllers\guru_dan_karyawan_controller;




Route::get('/', [dashboard_controller::class,'index']);
Route::get('/postingan/slug', [postingan_controller::class,'slug']);
Route::get('/berita', [dashboard_controller::class,'berita']);
Route::get('/prestasi', [dashboard_controller::class,'prestasi']);
Route::get('/galeri', [dashboard_controller::class,'galeri']);
Route::get('/profile', [dashboard_controller::class,'profile']);
Route::get('/login', [dashboard_controller::class,'login'])->name('login');
Route::post('/login', [dashboard_controller::class,'proses_login']);
Route::post('/logout', [dashboard_controller::class,'proses_logout']);
Route::get('/{}', [dashboard_controller::class,'index']);


Route::resource('/dashboard', profile_sekolah_controller::class)->middleware('auth');
Route::resource('/postingan', postingan_controller::class)->middleware('auth');
Route::resource('/siswa', siswa_controller::class)->middleware('auth');
Route::resource('/guru-dan-karyawan', guru_dan_karyawan_controller::class)->middleware('auth');
Route::resource('/kategori', kategori_controller::class)->middleware('auth');
