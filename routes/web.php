<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\MisAutosController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\SessionController;




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

// Ruta crud 


Route::get('/login', [SessionController::class, 'redirect']);

Auth::routes();

Route::get('/', function () {
    return view('welcome');});

// Ruta para autenticar datos del login ingresados
Route::post('/login', [SessionController::class, 'redirect']);    

// Route admin
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');


Route::get('/home', [HomeController::class, 'home'])->name('welcome');

// Ruta crud usuarios
Route::resource('users', UsersController::class);

// Ruta contactanos
Route::get('/home/contactanos', [ContactanosController::class, 'index'])->name('contactanos');

Route::post('/home/contactanos', [ContactanosController::class, 'store'])->name('store');







// Ruta crud autos
Route::resource('autos', AutoController::class);

// Ruta crud alquiler
Route::get('alquiler', [ALquilerController::class, 'alquiler'])->name('alquiler.index');

// Ruta de compra
Route::get('/comprar', [CompraController::class, 'index'])->name('comprar.index');

// Ruta Alquiler
Route::get('home/alquiler', [AlquilerController::class, 'alquiler']);








Route::get('/catalogo', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mostrarImagenAuto/{nombre}', [App\Http\Controllers\AutoController::class, 'mostrarImagenAuto'])->name('mostrarImagenAuto');

Route::get('/compras/{id}',[CompraController::class, 'comprarAuto']);

Route::get('/comprarImagenAuto/{nombre}',[CompraController::class, 'comprarImagenAuto'])->name('comprarImagenAuto');
https://prod.liveshare.vsengsaas.visualstudio.com/join?C368440553D17D8918C4EE3FB2C1F6D5AB34z
Route::get('/misCarros/{id_auto}',[MisAutosController::class, 'misCarros']);


// Direc

Route::get('/cliente/alquiler', [CompraController::class, 'comprarAuto']);

Route::get('/cliente/almacen',function(){
    return '/cliente/almacen';
});

// Ruta Categoria
Route::get('/categoria', [CategoriaController::class, 'categorias']);


// Ruta Admin


?>



