<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\MisAutosController;

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
Auth::routes();
Route::get('/', function () {return view('welcome');});
Route::get('/catalogo', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mostrarImagenAuto/{nombre}', [App\Http\Controllers\AutoController::class, 'mostrarImagenAuto'])->name('mostrarImagenAuto');

Route::get('/compras/{id}',[CompraController::class, 'comprarAuto']);
Route::get('/comprarImagenAuto/{nombre}',[CompraController::class, 'comprarImagenAuto'])->name('comprarImagenAuto');
Route::get('/misCarros/{id_auto}',[MisAutosController::class, 'misCarros']);




