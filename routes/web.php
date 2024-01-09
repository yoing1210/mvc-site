<?php

use App\Http\Controllers\Beranda;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilDesa;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\beritapost;

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

// Route::get('/', function () {
//     return view('layouts.main');
// });

Route::get('/', [beranda::class, 'index'])->name("beranda");
Route::get('/login.index',[Usercontroller::class,'index'])->name('login'); 
Route::post('/postlogin.index',[Usercontroller::class,'postlogin'])->name('postlogin');
Route::post('/logout',[UserController::class, 'logout']); 


Route::get('/admin', [DashboardController::class,'index'])->middleware('auth');
Route::resource('/admin/profil', ProfilDesa::class)->middleware('auth');
Route::post('/admin/profil/{id}', [ProfilDesa::class,'update'])->middleware('auth');

Route::resource('/admin/berita', BeritaController::class)->middleware('auth');
Route::post('/admin/berita/{id}', [BeritaController::class,'update'])->name('update')->middleware('auth');


Route::resource('/admin/categories', KategoriController::class)->except('show')->middleware('auth');
Route::get('/detail/{id}',[beritapost::class, 'show']) ->name("post");

// Route::post('/beranda', [Beranda::class,'post'])->name("post"); 