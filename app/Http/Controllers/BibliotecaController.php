<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Libro;
use App\Models\Autore;
use App\Models\Alquilere;
use App\Models\User;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;

class BibliotecaController extends Controller
{

    public function index()
    {
        return view('home');
    }


    public function listarLibros()
    {
         $libros = Libro::paginate(10);
        return view('libros', compact('libros'));
    }

    public function listarAutores()
    {
         $autores = Autore::paginate(10);
        return view('autores', compact('autores'));
    }

     public function listarUsuarios()
    {
         $usuarios = User::paginate(10);
        return view('usuarios', compact('usuarios'));
    }

    public function listarAlquileres()
    {
        $alquileres = Alquilere::paginate(10);
        return view('alquileres', compact('alquileres'));
    }
    public function crearAutores(){

        return view('crearAutores');
    }

    public function crearLibro(){
        $autores = Autore::all();
        return view('crearlibros', compact('autores'));
    }

    public function crearAlquileres(){
        $usuarios = User::all();
        $libros = Libro::all();
        return view('crearAlquileres', compact('usuarios'), compact('libros'));
    }

    public function crearUsuarios(){
        return view('auth.register');
    }

    public function actualizarAutores(Autore $autor){

        return view('actualizarAutores', [
            'autor'=>$autor
        ]);
    }

     public function actualizarLibros(Libro $libro){

        return view('actualizarLibros', [
            'libro'=>$libro
        ]);
    }

     public function actualizarAlquiler(Alquilere $alquiler){

        return view('actualizarAlquileres', [
            'alquiler'=>$alquiler
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Autore::create(
            [

                'nombre'=> request('nombre'),
                'apellidos'=> request('apellidos'),
                'nacionalidad'=> request('nacionalidad'),
                'sexo'=> request('sexo'),
                'edad'=> request('edad'),

            ]
            );
           return redirect()->route('autores');
    }

     public function createLibro()
    {
        Libro::create(
            [

                'titulo'=> request('titulo'),
                'categoria'=> request('categoria'),
                'autor_id'=> request('autor_id'),
                'descripcion'=> request('descripcion'),


            ]
            );
           return redirect()->route('libros');
    }

     public function createAlquiler()
    {
        Alquilere::create(
            [

                'codLibro'=> request('codLibro'),
                'codUsuario'=> request('codUsuario'),
                'fechaPrestamo'=> request('fechaPrestamo'),
                'fechaDevolucion'=> request('fechaDevolucion'),


            ]
            );
           return redirect()->route('alquileres');
    }


    public function update(Autore $autor)
    {
       $autor->update(
           [
               'nombre'=> request('nombre'),
               'apellidos'=> request('apellidos'),
               'nacionalidad'=> request('nacionalidad'),
               'sexo'=> request('sexo'),
               'edad'=> request('edad'),
           ]
           );
           return redirect()->route('autores');
    }

     public function updateLibro(Libro $libro)
    {
       $libro->update(
           [
               'titulo'=> request('titulo'),
                'categoria'=> request('categoria'),
                'autor_id'=> request('autor_id'),
                'descripcion'=> request('descripcion'),
           ]
           );
           return redirect()->route('libros');
    }

    public function updateAlquiler(Alquilere $alquiler)
    {
       $alquiler->update(
           [
                'codLibro'=> request('codLibro'),
                'codUsuario'=> request('codUsuario'),
                'fechaPrestamo'=> request('fechaPrestamo'),
                'fechaDevolucion'=> request('fechaDevolucion'),
           ]
           );
           return redirect()->route('alquileres');
    }


    public function destroy(Autore $autor)
    {
      $autor->delete();
         return redirect('autores');

    }

    public function destroyLibro(Libro $libro)
    {
      $libro->delete();
         return redirect('libros');

    }

    public function destroyAlquiler(Alquilere $alquiler)
    {
      $alquiler->delete();
         return redirect('alquileres');

    }

}
