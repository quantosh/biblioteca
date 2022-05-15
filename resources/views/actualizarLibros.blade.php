@extends('layauds.plantilla')

@section('cuerpo')

    <h1 class="text-center text-3xl py-8">Datos del autor</h1>
    <div class="m-auto flex justify-center border-2 w-1/2 bg-red-200">
    <form class="w-1/2 "  action="{{route ('updateLibro', $libro)}}" method="post">
         @csrf @method('PATCH')
    <label class="w-20" >Titulo</label>
    <input class="border-2 w-full" type="text"name="titulo" value="{{$libro->titulo}}" required>

     <label class="w-20" >Categoría</label>
    <input class="border-2 w-full" type="text"name="categoria" value="{{$libro->categoria}}" required>

     <label class="w-20" >Código Autor</label>
    <input class="border-2 w-full" type="text"name="codAutor" value="{{$libro->autor_id}}" required>

     <label class="w-20" >Descripción</label>
    <input class="border-2 w-full" type="text"name="descripción" value="{{$libro->descripcion}}" required>



    <input class="w-40 my-4 h-10 border-2" type="submit" value="Añadir"name="boton">


    </form>
    </div>


@endsection
