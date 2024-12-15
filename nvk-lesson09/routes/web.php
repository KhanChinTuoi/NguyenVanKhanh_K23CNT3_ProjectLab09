<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NVKSinhvienController;

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
    return view('welcome');
});

#sinhvien - model 
Route::get('/nvk-sinhviens',[NVKSinhvienController::class,'nvkList'])->name('Nvksinhvien.nvkList');
Route::get('/nvk-sinhviens/create',[NVKSinhvienController::class,'nvkCreate'])->name('Nvksinhvien.nvkCreate');
Route::get('/nvk-sinhviens/create',[NVKSinhvienController::class,'nvkCreateSubmit'])->name('Nvksinhvien.nvkCreateSubmit');