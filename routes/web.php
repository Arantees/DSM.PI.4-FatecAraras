<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\personalizadoController;
use App\Http\Controllers\servicosController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [homeController::class, 'index'])->name('home');
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::get('/servicos', [servicosController::class, 'index'])->name('servicos');
Route::get('/personalizado', [personalizadoController::class, 'index'])->name('personalizado');