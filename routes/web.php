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
use App\Http\Controllers\VentaController;




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

// Ruta para controlar vistas admin | usuarios
Route::get('/login', [SessionController::class, 'redirect']);

Auth::routes();

Route::get('/', function () {
    return view('welcome');});

// Ruta para autenticar datos del login ingresados
Route::post('/login', [SessionController::class, 'redirect']);    

// Ruta home (PAGINA PRINCIPAL)
Route::get('/home', [HomeController::class, 'home'])->name('welcome');

// RUTAS DE CLIENTES

Route::get('/home/contactanos', [ContactanosController::class, 'index'])->name('contactanos');

Route::post('/home/contactanos', [ContactanosController::class, 'store'])->name('store');

Route::get('/home/comprar', [CompraController::class, 'index'])->name('comprar.index');

Route::get('/home/alquiler', [AlquilerController::class, 'index'])->name('alquiler');

Route::get('/home/catalogo', [HomeController::class, 'index'])->name('home');

Route::get('/home/categoria', [CategoriaController::class, 'categorias'])->name('categoria');

// FIN DE RUTAS CLIENTES



// RUTAS DEL ADMINISTRADOR 

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::resource('/admin/users', UsersController::class);

Route::resource('/admin/autos', AutoController::class);

Route::get('/admin/venta', [VentaController::class, 'index'])->name('venta.index');

Route::get('/admin/alquiler', [ALquilerController::class, 'alquiler'])->name('alquiler.index');

// FIN DE RUTAS DEL ADMINISTRADOR 







// RUTAS POR VALIDAR
Route::get('/mostrarImagenAuto/{nombre}', [App\Http\Controllers\AutoController::class, 'mostrarImagenAuto'])->name('mostrarImagenAuto');

Route::get('/compras/{id}',[CompraController::class, 'comprarAuto']);

Route::get('/comprarImagenAuto/{nombre}',[CompraController::class, 'comprarImagenAuto'])->name('comprarImagenAuto');

Route::get('/misCarros/{id_auto}',[MisAutosController::class, 'misCarros']);

Route::get('/cliente/alquiler', [CompraController::class, 'comprarAuto']);

Route::get('/cliente/almacen',function(){
    return '/cliente/almacen';
});

?>



