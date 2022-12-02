<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\MisAutosController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\PromocionController;

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

Route::get('/', function () {
    return view('welcome');
});

// Ruta Alquiler
Route::get('home/alquiler', [AlquilerController::class, 'alquiler']);


Route::get('/catalogo', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mostrarImagenAuto/{nombre}', [App\Http\Controllers\AutoController::class, 'mostrarImagenAuto'])->name('mostrarImagenAuto');


Route::get('/compras/{id}',[CompraController::class, 'comprarAuto']);

Route::get('/comprarImagenAuto/{nombre}',[CompraController::class, 'comprarImagenAuto'])->name('comprarImagenAuto');

Route::get('/misCarros/{id_auto}',[MisAutosController::class, 'misCarros']);


// Direc

Route::get('/cliente/alquiler', [CompraController::class, 'comprarAuto']);

Route::get('/cliente/almacen',function(){
    return '/cliente/almacen';
});

Route::get('/admin/info_clientes',function(){
    return '';
});

Route::get('/admin/info_ventas',function(){
    return '';
});

Route::get('/admin/info_alquileres',function(){
    return '';
});

Route::get('/admin/info_vehiculos',function(){
    return '';
});

Route::get('/admin/edit_clientes',function(){
    return '';
});


Route::get('/admin/promociones',[PromocionController::class,'promociones']);

?>



