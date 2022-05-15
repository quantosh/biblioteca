@extends('layauds.plantilla')

@section('cuerpo')

    <h1 class="text-center text-3xl py-8">Datos del alquiler</h1>


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

            @endforeach
        </ul>

    @endif

    <div class="m-auto flex justify-center border-2 w-1/2 bg-red-200">
    <form class="w-1/2 "  action="{{route ('añadirAlquiler')}}" method="post">
         @csrf
    <label class="w-20" >Libro</label><br>

    <select name="codLibro" id="" class="w-64">
        @foreach ($libros as $libro)
            <option value="{{$libro->id}}">{{$libro->titulo}}</option>

        @endforeach
    </select>
    <a href="{{ route('crearLibro') }}" class="ml-4 px-2 border-2 rounded-xl bg-slate-100">Crear libro</a><br>

     <label class="w-20" >Usuario</label><br>

    <select name="codUsuario" id="" class="w-64">
        @foreach ($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->name}}</option>

        @endforeach
    </select>
    <a href="{{ route('crearUsuarios') }}" class="ml-4 px-2 border-2 rounded-xl bg-slate-100">Crear usuario</a><br>

     <label class="w-20" >Fecha del préstamo</label>
    <input class="border-2 w-full" type="text"name="fechaPrestamo" required>

     <label class="w-20" >Fecha devolución</label>
    <input class="border-2 w-full" type="text"name="fechaDevolucion" required>



    <input class="w-40 my-4 h-10 border-2" type="submit" value="Añadir"name="boton">


    </form>
    </div>


@endsection
