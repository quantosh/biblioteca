@extends('layauds.plantilla')

@section('cuerpo')

    <h1 class="text-center text-3xl py-8">Datos del autor</h1>
    <div class="m-auto flex justify-center border-2 w-1/2 bg-red-200">
    <form class="w-1/2 "  action="{{route ('updateAlquiler', $alquiler)}}" method="post">
         @csrf @method('PATCH')
    <label class="w-20" >CodLibro</label>
    <input class="border-2 w-full" type="text"name="codLibro" value="{{$alquiler->codLibro}}" required>

     <label class="w-20" >CodUsuario</label>
    <input class="border-2 w-full" type="text"name="codUsuario" value="{{$alquiler->codUsuario}}" required>

     <label class="w-20" >Fecha del préstamo</label>
    <input class="border-2 w-full" type="text"name="fechaPrestamo" value="{{$alquiler->fechaPrestamo}}" required>

     <label class="w-20" >Fecha devolución</label>
    <input class="border-2 w-full" type="text"name="fechaDevolucion" value="{{$alquiler->fechaDevolucion}}" required>


    <input class="w-40 my-4 h-10 border-2" type="submit" value="Añadir"name="boton">


    </form>
    </div>


@endsection
