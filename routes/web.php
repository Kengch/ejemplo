<?php

use Illuminate\Support\Facades\Route;

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

//persona
Route::get('/index', [App\Http\Controllers\Persona_Controller::class,'index']);
Route::get('/crear', [App\Http\Controllers\Persona_Controller::class,'crear']);
Route::get('/borrar/{id}', [App\Http\Controllers\Persona_Controller::class,'borrar']);
Route::get('/editar/{id}', [App\Http\Controllers\Persona_Controller::class,'editar']);

Route::post('crear', [App\Http\Controllers\Persona_Controller::class,'store'])->name('crear.store');
Route::post('/editar', [App\Http\Controllers\Persona_Controller::class,'editarPersona'])->name('editar.editarPersona');


//provincias ruta                                                      funcion en el controlador
Route::get('/prov', [App\Http\Controllers\provinciasController::class,'prov']);
Route::get('/crearProv', [App\Http\Controllers\provinciasController::class,'crearProv']);
Route::get('/editarProv/{id}', [App\Http\Controllers\provinciasController::class,'editarProv']);
Route::get('/borrarProvincia/{id}', [App\Http\Controllers\provinciasController::class,'borrarProvincia']);

Route::post('crearProv', [App\Http\Controllers\provinciasController::class,'crearProvincia'])->name('crearProv.crearProvincia');
Route::post('/editarProv', [App\Http\Controllers\provinciasController::class,'editarProvincia'])->name('editarProv.editarProvincia');