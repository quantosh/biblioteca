<?php

use App\Http\Controllers\BibliotecaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('inicio');
});*/

Route::controller(BibliotecaController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('autores', 'listarAutores')->name('autores');

    Route::get('libros', 'listarLibros')->name('libros');
    Route::get('usuarios', 'listarUsuarios')->name('usuarios');
    Route::get('alquileres', 'listarAlquileres')->name('alquileres');

    Route::get('autores/crearAutor','crearAutores')->name('crearAutor');
    Route::post('crearAutor','create')->name('añadirAutor');

    Route::get('libros/crearLibro','crearLibro')->name('crearLibro');
    Route::post('crearLibro','createLibro')->name('añadirLibro');

    Route::get('alquileres/crearAlquiler','crearAlquileres')->name('crearAlquiler');
    Route::post('crearAlquiler','createAlquiler')->name('añadirAlquiler');

    Route::get('usuarios/crearUsuarios','crearUsuarios')->name('crearUsuarios');


   Route::get('autores/{autor}/actualizarAutor','actualizarAutores')->name('actualizarAutor');
    Route::patch('actualizarAutor/{autor}','update')->name('updateAutor');

    Route::get('libros/{libro}/actualizarLibro','actualizarLibros')->name('actualizarLibros');
    Route::patch('actualizarAutor/{autor}','updateLibro')->name('updateLibro');

   Route::get('alquileres/{alquiler}/actualizarAlquiler','actualizarAlquiler')->name('actualizarAlquiler');
    Route::patch('actualizarAlquiler/{alquiler}','updateAlquiler')->name('updateAlquiler');

    Route::delete('autores/{autor}/eleminarAutor', 'destroy')->name('destroyAutor');

    Route::delete('libros/{libro}/eleminarLibro', 'destroyLibro')->name('destroyLibro');

     Route::delete('alquileres/{alquiler}/eleminarAlquiler', 'destroyAlquiler')->name('destroyAlquiler');
});

Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
