<?php

use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\HomeController;
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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('autores', 'autores')->name('autores');
    Route::get('libros', 'libros')->name('libros');
    Route::get('usuarios', 'usuarios')->name('usuarios');
    Route::get('alquileres', 'alquileres')->name('alquileres');


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
