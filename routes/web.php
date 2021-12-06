<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\UsuarioController;
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
//rutas
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//rutas del menu
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('Inicio',[InicioController::class, 'index']);
Route::get('Entrenador',[EntrenadorController::class, 'index']);
Route::get('clase',[ClaseController::class, 'index']);
Route::get('Usuario',[UsuarioController::class, 'index']);
//ruta del home donde se selecciona el rol
Route::get('/', function () {
    return view('modulos.Seleccionar');
});
//ruta de inicio de sesion
Route::get('/Ingresar', function () {
    return view('modulos.Ingresar');
});
//rutas funciones de la vista clases
Route::post('clase',[ClaseController::class, 'store']);
Route::put ('clase/{id}',[ClaseController::class,'update']);
Route::delete ('borrar-clase/{id}',[claseController::class,'destroy']);

//rutas funciones de la vista entrenador
Route::post('Entrenador',[EntrenadorController::class, 'store']);
Route::get('Eliminar-Entrenador/{id}',[EntrenadorController::class, 'destroy']);

//rutas funciones de la vista Usuario
Route::get('Crear-Usuario',[UsuarioController::class, 'create']);
Route::post('Crear-Usuario',[UsuarioController::class, 'store']);
Route::get('Editar-Usuario/{id}',[UsuarioController::class, 'edit']);
Route::put('actualizar-Usuario/{Usuario}',[UsuarioController::class, 'update']);
Route::get('Eliminar-Usuario/{id}',[UsuarioController::class, 'destroy']);