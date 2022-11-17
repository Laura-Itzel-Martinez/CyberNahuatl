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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');

//RUTAS DENTRO DEL SISTEMA
Route::get('/cursos', [App\Http\Controllers\HomeController::class, 'cursos'])->name('cursos');
Route::get('/diccionario', [App\Http\Controllers\DiccionarioController::class, 'diccionario'])->name('diccionario');
Route::get('/perfil', [App\Http\Controllers\HomeController::class, 'perfil'])->name('perfil');
Route::get('/profesores', [App\Http\Controllers\HomeController::class, 'profesores'])->name('profesores');
Route::get('/alfabeto', [App\Http\Controllers\HomeController::class, 'alfabeto'])->name('alfabeto');
Route::get('/numeracion', [App\Http\Controllers\HomeController::class, 'numeracion'])->name('numeracion');
Route::get('/cuerpo', [App\Http\Controllers\HomeController::class, 'cuerpo'])->name('cuerpo');
Route::get('/animales', [App\Http\Controllers\HomeController::class, 'animales'])->name('animales');
Route::get('/colores', [App\Http\Controllers\HomeController::class, 'colores'])->name('colores');