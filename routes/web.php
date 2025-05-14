<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
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

Route::get('blog', function () {
    return view('blog');
});

Route:get('hello', [Coba::class, 'helloworld']);
//Route::get('hello','App\Http\Controllers\Coba')
