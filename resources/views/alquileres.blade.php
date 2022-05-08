@extends('layauds.plantilla')
@section('cuerpo')
    <table class="border-collapse m-auto table-auto ">
        <thead>
            <tr>
                <th class="border-2 bg-green-50 p-2">Id alquiler</th>
                <th class="border-2 bg-green-50 p-2">Fecha prestamo</th>
                <th class="border-2 bg-green-50 p-2">Fecha devolución</th>
                <th class="border-2 bg-green-50 p-2">Nombre usuario</th>
                <th class="border-2 bg-green-50 p-2">Teléfono</th>
                <th class="border-2 bg-green-50 p-2">Titulo del libro</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alquileres as $alquiler )
            <tr>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->id}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->fechaPrestamo}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->fechaDevolucion}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->name}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->telefono}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->titulo}}</td>
            </tr>

            @endforeach
        </tbody>



    </table>
<div >
    {{ $alquileres->links() }}
</div>

@endsection
