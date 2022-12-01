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
Route::get('/meses', [App\Http\Controllers\HomeController::class, 'meses'])->name('meses');

//rutas de los cursos
Route::get('/cursos/morfologica', [App\Http\Controllers\Cursos::class, 'morfologica'])->name('morfologica');
Route::get('/cursos/honorifico', [App\Http\Controllers\Cursos::class, 'honorifico'])->name('honorifico');
Route::get('/cursos/metaforica', [App\Http\Controllers\Cursos::class, 'metaforica'])->name('metaforica');
Route::get('/cursos/omnipredicativa', [App\Http\Controllers\Cursos::class, 'omnipredicativa'])->name('omnipredicativa');
Route::get('/cursos/absolutivos', [App\Http\Controllers\Cursos::class, 'absolutivos'])->name('absolutivos');
Route::get('/cursos/diminutivos', [App\Http\Controllers\Cursos::class, 'diminutivos'])->name('diminutivos');
Route::get('/cursos/posesivos', [App\Http\Controllers\Cursos::class, 'posesivos'])->name('posesivos');
Route::get('/cursos/absolutivos', [App\Http\Controllers\Cursos::class, 'absolutivos'])->name('absolutivos');
Route::get('/cursos/pluralesSimples', [App\Http\Controllers\Cursos::class, 'pluralesSimples'])->name('pluralesSimples');
Route::get('/cursos/marcasSujetos', [App\Http\Controllers\Cursos::class, 'marcasSujetos'])->name('marcasSujetos');
Route::get('/cursos/reverenciales', [App\Http\Controllers\Cursos::class, 'reverenciales'])->name('reverenciales');


