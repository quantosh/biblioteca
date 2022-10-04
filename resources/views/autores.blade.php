@extends('layauds.plantilla')

@section('head')


@endsection


@section('cuerpo')

    <div class="w-full grid grid-cols-4 gap-3 justify-center">
        <div class="grid justify-end">
            <a href="{{route ('crearAutor')}}" class="bg-green-500 m-auto w-30 h-10 p-2 rounded-md">Crear autor</a>

        </div>
       <div class="col-span-3">
        <table class="border-collapse table-auto ">

        <thead>
            <tr>
                <th class="border-2 bg-green-50 p-2">Id autor</th>
                <th class="border-2 bg-green-50 p-2">Nombre</th>
                <th class="border-2 bg-green-50 p-2">Apellidos</th>
                <th class="border-2 bg-green-50 p-2">Nacionalidad</th>
                <th class="border-2 bg-green-50 p-2">Sexo</th>
                <th class="border-2 bg-green-50 p-2">Edad</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($autores as $autor )
            <tr>
                <td class="border-2 p-2 bg-gray-100">{{$autor->id}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$autor->nombre}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$autor->apellidos}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$autor->nacionalidad}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$autor->sexo}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$autor->edad}}</td>
                <td><a class="bg-green-200 m-auto w-30 h-10 p-2 rounded-md" href="{{route('actualizarAutor', $autor)}}">Editar</a></td>
                <td>


                    <form action="{{route('destroyAutor', $autor)}}" method="POST" id="eliminar">
                    @csrf @method('DELETE')
                    <input class="bg-red-200 m-auto w-30 h-10 p-2 rounded-md" type="submit"  value="Eliminar">
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>



    </table>
       </div>

    </div>

<div >
    {{ $autores->links() }}
</div>



@endsection
