<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Api\DashboardMasyarakatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//REST API MASYARAKAT
Route::get('/masyarakat',[DashboardMasyarakatController::class,'index']);
Route::get('/masyarakat/{id}',[DashboardMasyarakatController::class,'show']);
Route::post('/masyarakat-create',[DashboardMasyarakatController::class,'store']);
Route::put('/masyarakat/{id}',[DashboardMasyarakatController::class,'update']);
Route::delete('/masyarakat/{id}',[DashboardMasyarakatController::class,'destroy']);

//REST API PETUGAS
Route::get('/petugas',[DashboardPetugasController::class,'index']);
Route::get('/petugas{id}',[DashboardPetugasController::class,'show']);
Route::get('/api-petugas/{id}',[DashboardPetugasController::class,'apiPetugasDetail']);
Route::post ('/petugas',[DashboardPetugasController::class,'store']);
Route::put('/petugas/{id}',[DashboardPetugasController::class,'update']);

//REST API ADMIN
Route::get('/admin',[DashboardAdminController::class,'index']);
Route::get('/admin{id}',[DashboardAdminController::class,'show']);
Route::get('/api-admin/{id}',[DashboardAdminController::class,'apiAdminDetail']);
Route::post('/admin',[DashboardAdminController::class,'store']);
Route::put('/admin/{id}',[DashboardAdminController::class,'update']);
Route::delete('/admin/{id}',[DashboardAdminController::class,'destroy']);

//REST API KEGIATAN
Route::get('/kegiatan',[DashboardKegiatanController::class,'index']);
