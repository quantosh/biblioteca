@extends('layauds.plantilla')

@section('cuerpo')

    <h1 class="text-center text-3xl py-8">Datos del autor</h1>
    <div class="m-auto flex justify-center border-2 w-1/2 bg-red-200">

    <form class="w-1/2 "  action="{{route ('updateAutor', $autor)}}" method="post">
         @csrf @method('PATCH')
    <label class="w-20" >Nombre</label>
    <input class="border-2 w-full" type="text"name="nombre" value="{{$autor->nombre}}">

     <label class="w-20" >Apellidos</label>
    <input class="border-2 w-full" type="text"name="apellidos" value="{{$autor->apellidos}}">

     <label class="w-20" >Nacionalidad</label>
    <input class="border-2 w-full" type="text"name="nacionalidad" value="{{$autor->nacionalidad}}">

     <p>Sexo</p>
    @if ($autor->sexo == 'Hombre')
        <label class="w-20" >Hombre</label>
        <input type="radio" name="sexo" value="Hombre" id="" checked>
        <label class="w-20" >Mujer</label>
        <input type="radio" name="sexo" value="Mujer" id=""><br>
    @else
        <label class="w-20" >Hombre</label>
        <input type="radio" name="sexo" value="Hombre" id="" >
        <label class="w-20" >Mujer</label>
        <input type="radio" name="sexo" value="Mujer" id="" checked><br>

        @endif

        <label class="w-20" >Edad</label>
        <input class="border-2 w-full" type="text"name="edad" value="{{$autor->edad}}">


        <input class="w-40 my-4 h-10 border-2" type="submit" value="Añadir"name="boton">
    </form>

    </div>


@endsection
