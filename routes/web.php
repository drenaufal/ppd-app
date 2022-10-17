<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\datalcontroller;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'ceklogin']);





Route::get('/home', [HomeController::class, 'index']);
Route::get('/mainlayout', [mainlayoutController::class, 'index']);
Route::get('/add', [AddController::class, 'index']);
Route::post('/add', [AddController::class, 'tambah']);
Route::get('/list', [datalcontroller::class, 'index']);
Route::get('/list/cetak_pdf', [datalcontroller::class, 'cetak_pdf']);




Route::get('data/{datadetail:id}', [datalcontroller::class, 'showdetail']);