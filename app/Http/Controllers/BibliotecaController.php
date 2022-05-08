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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $libros = Libro::paginate(10);
        return view('libros', compact('libros'));
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
         $alquileres = DB::table('alquileres')
                    //Alquilere::paginate(10)
                    ->join('libros', 'alquileres.codLibro', '=','libros.id')
                    ->join('users', 'alquileres.codUsuario', '=','users.id')
                    ->select('alquileres.id', 'alquileres.fechaPrestamo', 'alquileres.fechaDevolución', 'users.name', 'users.telefono', 'libros.titulo' )
                    ->get();
        return view('alquileres', compact('alquileres'));
    }
    public function crearAutores(){

        return view('crearAutores');
    }

    public function actualizarAutores(Autore $autor){

        return view('actualizarAutores', [
            'autor'=>$autor
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLibroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLibroRequest  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
