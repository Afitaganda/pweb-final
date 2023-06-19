<?php

use App\Http\Controllers\c_produk;
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
//     return view('beranda');
// });

Route::get('/produk', '\App\Http\Controllers\c_produk@index')->name('produk.index');
Route::get('/tambah', '\App\Http\Controllers\c_produk@tambah')->name('produk.tambah');
Route::post('/tambah', '\App\Http\Controllers\c_produk@simpan')->name('produk.tambah.simpan');
Route::get('/{produk_id}', '\App\Http\Controllers\c_produk@edit')->name('produk.edit');
Route::post('/{produk_id}/simpan', '\App\Http\Controllers\c_produk@update')->name('produk.edit.update');
Route::get('/{produk_id}/delete', '\App\Http\Controllers\c_produk@hapus')->name('produk.hapus');


Route::get('/', '\App\Http\Controllers\c_beranda@index')->name('beranda');


// Auth::routes();

Route::get('/register', [AuthController::class, 'register_view']);
Route::post('/registrasi', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login_view'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// // AKUN VIEW
// Route::get('/profile', [UserController::class, 'profile'])->middleware('auth')->name('profile');
// // AKUN EDIT
// Route::post('/user/edit', [UserController::class, 'edit'])->middleware('auth')->name('user.edit');

// ADMIN
Route::get('/dashboard', [UserController::class, 'dashboard_admin'])->middleware('admin')->name('dashboard');
// ADMIN EDIT
Route::post('/admin/edit', [UserController::class, 'edit_admin'])->middleware('admin')->name('admin.edit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
