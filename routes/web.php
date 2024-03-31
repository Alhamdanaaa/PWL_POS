<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class,'index']);
// Route::get('/user/tambah', [UserController::class,'tambah']);
// Route::get('/user/tambah_simpan', [UserController::class,'tambah_simpan']);
// Route::get('/user/ubah/{id}', [UserController::class,'ubah']);
// Route::get('/user/simpan/{id}', [UserController::class,'ubah_simpan']);
// Route::get('/user/hapus/{id}', [UserController::class,'hapus']);
Route::get('/kategori/create', [KategoriController::class,'create']);
Route::post('/kategori', [KategoriController::class,'store']);
Route::post('/kategori/ubah', [KategoriController::class,'store']);
Route::get('/kategori/update/{id}', [KategoriController::class,'update']);
Route::put('/kategori/update_save/{id}', [KategoriController::class,'update_save']);
Route::get('/kategori/destroy/{id}', [KategoriController::class,'destroy']);
// Route::resource('m_user', POSController::class);
Route::resource('m_user',UserController::class);
Route::resource('level',LevelController::class);

Route::get('/',[WelcomeController::class,'index']);