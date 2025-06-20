<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Coba;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SemenController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NewKaryawanController;
// import java.io.* ;

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

// System.out.println() ;
// Route.get() ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "<h1>Halo, selamat datang di tutorial</h1>";
});

Route::get('hello', [Coba::class, 'helloworld']);
//Route::get('hello','App\Http\Controllers\Coba')


Route::get('dosen', [DosenController::class, 'index']);
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);

//route pencari
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD 2
Route::get('/semen',[SemenController::class, 'index']);
Route::get('/semen/tambah',[SemenController::class, 'tambah']);
Route::post('/semen/store',[SemenController::class, 'store']);
Route::get('/semen/edit/{id}',[SemenController::class, 'edit']);
Route::post('/semen/update',[SemenController::class, 'update']);
Route::get('/semen/hapus/{id}',[SemenController::class, 'hapus']);

//route pencari 2
Route::get('/semen', [SemenController::class, 'index']);
Route::get('/semen/cari', [SemenController::class, 'cari']);

//route latihan karyawan
Route::get('/karyawan',[KaryawanController::class, 'index']);
Route::get('/karyawan/tambah',[KaryawanController::class, 'tambah']);
Route::post('/karyawan/store',[KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}',[KaryawanController::class, 'edit']);
Route::post('/karyawan/update',[KaryawanController::class, 'update']);
Route::get('/karyawan/hapus/{id}',[KaryawanController::class, 'hapus']);

//route pencari karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);

//route latihan pagecounter
Route::get('/pagecounter', [PageCounterController::class, 'show']);

//route latihan keranjangbelanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'indexkeranjangbelanja']);
Route::get('/keranjangbelanja/belikeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'belikeranjangbelanja']);
Route::get('/keranjangbelanja/batalkeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'batalkeranjangbelanja']);
Route::post('/keranjangbelanja/storekeranjangbelanja', [KeranjangBelanjaController::class, 'storekeranjangbelanja']);
Route::post('/keranjangbelanja/updatekeranjangbelanja', [KeranjangBelanjaController::class, 'updatekeranjangbelanja']);

//route eas
Route::get('/eas',[NewKaryawanController::class, 'index']);
Route::get('/eas/tambah',[NewKaryawanController::class, 'tambah']);
Route::post('/eas/store',[NewKaryawanController::class, 'store']);
Route::get('/eas/edit/{id}',[NewKaryawanController::class, 'edit']);
Route::post('/eas/update',[NewKaryawanController::class, 'update']);
Route::get('/eas/hapus/{id}',[NewKaryawanController::class, 'hapus']);
