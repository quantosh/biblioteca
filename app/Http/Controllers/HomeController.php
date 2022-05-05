<?php

namespace App\Http\Controllers;

use App\Models\Alquilere;
use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('home');
    }
     public function inicio()
    {


        return view('inicio');
    }




      public function autores(){
        return view('autores');

    }

    public function libros(){
        $libros = Libro::paginate(10);
        return view('libros', compact('libros'));

    }
    public function usuarios(){

        return view('usuarios');

    }
    public function alquileres(){
        $alquileres = DB::table('alquileres')
                    //Alquilere::paginate(10)
                    ->join('libros', 'alquileres.alquiler_id', '=','libros.id_libro')
                    ->join('usuarios', 'alquileres.usuario_id', '=','usuarios.id_usuario')
                    ->select('alquileres.alquiler_id', 'alquileres.fechprestamo', 'alquileres.fechdevolucion', 'usuarios.nombreusuario', 'usuarios.telefono', 'libros.titulo' )
                    ->get();
        return view('alquileres', compact('alquileres'));

    }

}
