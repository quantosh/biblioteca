@extends('layauds.plantilla')

@section('cuerpo')

    <h1 class="text-center text-3xl py-8">Datos del libro</h1>
    <div class="m-auto flex justify-center border-2 w-1/2 bg-red-200">
    <form class="w-1/2 "  action="{{route ('updateLibro', $libro)}}" method="post">
         @csrf @method('PATCH')
    <label class="w-20" >Titulo</label>
    <input class="border-2 w-full" type="text"name="titulo" value="{{old('titulo', $libro->titulo)}}" required>

     <label class="w-20" >Categoría</label>
    <input class="border-2 w-full" type="text"name="categoria" value="{{old('categoria', $libro->categoria)}}" required>

     <label class="w-20" >Código Autor</label>
    <input class="border-2 w-full" type="text"name="autor_id" value="{{old('autor_id', $libro->autor_id)}}" required>

    <label class="w-20" >Autor</label>
    <!--<input class="border-2 w-full" type="text"name="autor_id" required>-->
    <select name="autor_id" id="" class="w-64">
            <option value="{{old('autor_id', $libro->autor_id)}}">{{old('autor_id', $libro->autor_id)}}</option>
        @foreach ($autores as $autor)
            <option value="{{$autor->id}}">{{$autor->nombre}}</option>

        @endforeach
    </select>
    <a href="{{ route('crearAutor') }}" class="ml-4 p-2 border-2 rounded-xl bg-slate-100">Crear autor</a><br><br>

     <label class="w-20" >Descripción</label>
    <input class="border-2 w-full" type="text"name="descripcion" value="{{old('descripcion', $libro->descripcion)}}" required>



    <input class="w-40 my-4 h-10 border-2" type="submit" value="Añadir"name="boton">


    </form>
    </div>


@endsection
