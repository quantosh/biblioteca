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

   Route::get('autores/{autor}/actualizarAutor','actualizarAutores')->name('actualizarAutor');
    Route::patch('actualizarAutor/{autor}','update')->name('updateAutor');

    Route::delete('autores/{autor}/eleminarAutor', 'destroy')->name('destroyAutor');
});

Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
