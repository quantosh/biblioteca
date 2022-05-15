@extends('layauds.plantilla')
@section('cuerpo')

     <div class="w-full grid grid-cols-4 gap-3 justify-center">

        <div class="grid justify-end">
            <a href="{{route ('crearAlquiler')}}" class="bg-green-500 m-auto w-30 h-10 p-2 rounded-md">Crear alquiler</a>

        </div>

         <div class="col-span-3">

    <table class="border-collapse table-auto ">
        <thead>
            <tr>
                <th class="border-2 bg-green-50 p-2">Id alquiler</th>
                <th class="border-2 bg-green-50 p-2">Código del libro</th>
                 <th class="border-2 bg-green-50 p-2">Código usuario</th>
                <th class="border-2 bg-green-50 p-2">Fecha prestamo</th>
                <th class="border-2 bg-green-50 p-2">Fecha devolución</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($alquileres as $alquiler )
            <tr>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->id}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->codLibro}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->codUsuario}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->fechaPrestamo}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$alquiler->fechaDevolucion}}</td>
                <!-- <td><a class="bg-green-200 m-auto w-30 h-10 p-2 rounded-md" href="{{route('actualizarAlquiler', $alquiler)}}">Editar</a></td>
                <td>
                    <form action="{{route('destroyAlquiler', $alquiler)}}" method="POST">
                    @csrf @method('DELETE')
                    <input class="bg-red-200 m-auto w-30 h-10 p-2 rounded-md" type="submit" value="Eliminar">
                    </form>
                </td>-->



            </tr>

            @endforeach
        </tbody>



    </table>
         </div>
<div >
    {{ $alquileres->links() }}
</div>
     </div>
@endsection
