@extends('layauds.plantilla')
@section('cuerpo')
    <table class="border-collapse m-auto table-auto ">
        <thead>
            <tr>
                <th class="border-2 bg-green-50 p-2">Id</th>
                <th class="border-2 bg-green-50 p-2">Nombre</th>
                <th class="border-2 bg-green-50 p-2">Teléfono</th>
                <th class="border-2 bg-green-50 p-2">email</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario )
            <tr>
                <td class="border-2 p-2 bg-gray-100">{{$usuario->id}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$usuario->name}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$usuario->telefono}}</td>
                <td class="border-2 p-2 bg-gray-100">{{$usuario->email}}</td>

            </tr>

            @endforeach
        </tbody>



    </table>
<div >
   {{ $usuarios->links() }}
</div>

@endsection
