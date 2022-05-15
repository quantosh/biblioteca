@extends('layauds.plantilla')
@section('cuerpo')

    <div class="w-full grid grid-cols-4 gap-3 justify-center">
        <div class="grid justify-end">
             <a href="{{route ('crearLibro')}}" class="bg-green-500 m-auto w-30 h-10 p-2 rounded-md">Crear Libro</a>
        </div>

        <div class="col-span-3">
             <table class="border-collapse table-auto ">
        <thead>
            <tr>
                <th class="border-2 bg-green-50 p-2">Id</th>
                <th class="border-2 bg-green-50 p-2">Titulo</th>
                <th class="border-2 bg-green-50 p-2">Categoría</th>
                <th class="border-2 bg-green-50 p-2">Id del autor</th>
                <th class="border-2 bg-green-50 p-2">Descripción</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro )
            <tr>
                <td class="border-2 p-2 bg-gray-100">{{$libro->id}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$libro->titulo}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$libro->categoria}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$libro->autor_id}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$libro->descripcion}}</td>
                 <td><a class="bg-green-200 m-auto w-30 h-10 p-2 rounded-md" href="{{route('actualizarLibros', $libro)}}">Editar</a></td>
                <td>
                    <form action="{{route('destroyLibro', $libro)}}" method="POST">
                    @csrf @method('DELETE')
                    <input class="bg-red-200 m-auto w-30 h-10 p-2 rounded-md" type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>



    </table>
        </div>

<div >
   {{ $libros->links() }}
</div>
</div>
@endsection
