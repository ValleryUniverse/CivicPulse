<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoriController;

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

Route::get('/', function () {
    return view('Landingpage.home');
});
Route::get('/home', function () {
    return view('Landingpage.home');
});

// ADMIN
Route::get('/dashboard', function () {
    return view('Admin.dashboard_admin');
});
Route::get('/pengaduan_admin', function () {
    return view('Admin.data_pengaduan');
});
Route::get('/data_user', 
  [UserController::class,'index']
);

// MASYARAKAT
Route::get('/histori_pengaduan', 
  [HistoriController::class,'index']
);
