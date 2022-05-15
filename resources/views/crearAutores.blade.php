@extends('layauds.plantilla')

@section('cuerpo')

    <h1 class="text-center text-3xl py-8">Datos del autor</h1>


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

            @endforeach
        </ul>

    @endif

    <div class="m-auto flex justify-center border-2 w-1/2 bg-red-200">
    <form class="w-1/2 "  action="{{route ('añadirAutor')}}" method="post">
         @csrf
    <label class="w-20" >Nombre</label>
    <input class="border-2 w-full" type="text"name="nombre" required>

     <label class="w-20" >Apellidos</label>
    <input class="border-2 w-full" type="text"name="apellidos" required>

     <label class="w-20" >Nacionalidad</label>
    <input class="border-2 w-full" type="text"name="nacionalidad" required>

    <p>Sexo</p>

     <label class="w-20" >Hombre</label>
    <!--<input class="border-2 w-full" type="text"name="sexo" required>-->
    <input type="radio" name="sexo" value="Hombre" id="">
    <label class="w-20" >Mujer</label>
    <input type="radio" name="sexo" value="Mujer" id=""><br>


     <label class="w-20" >Edad</label>
    <input class="border-2 w-full" type="text"name="edad" required>


    <input class="w-40 my-4 h-10 border-2" type="submit" value="Añadir"name="boton">


    </form>
    </div>


@endsection
