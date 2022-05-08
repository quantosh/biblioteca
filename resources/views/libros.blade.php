@extends('layauds.plantilla')
@section('cuerpo')
    <table class="border-collapse m-auto table-auto ">
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
                <td class="border-2 p-2 bg-gray-100">{{$libro->id_libro}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$libro->titulo}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$libro->categoria}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$libro->autor_id}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$libro->descripcion}}</td>
            </tr>

            @endforeach
        </tbody>



    </table>
<div >
   {{ $libros->links() }}
</div>

@endsection
