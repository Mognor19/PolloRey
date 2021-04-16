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
Route::view('/', 'paginaPrincipal')->name('paginaPrincipal');
Route::view('/recetas', 'recetas')->name('recetas');
Route::get('/producto', 'productoController@create')->name('producto.create');
Route::get('/producto/{producto}', 'productoController@show')->name('producto.show');
Route::get('/producto', 'productoController@store')->name('producto.store');
Route::get('/producto', 'productoController@index')->name('producto.index');
Route::get('/embutido', 'embutidoController@index')->name('embutido.index');
Route::view('/contacto', 'Contacto')-> name('contacto');
Route::post('Contacto', 'validacionController@store')->name('Contacto');
