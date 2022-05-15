@extends('layauds.plantilla')
@section('cuerpo')

    <div class="w-full grid grid-cols-4 gap-3 justify-center">
         <div class="grid justify-end">
             <a href="{{route ('crearUsuarios')}}" class="bg-green-500 m-auto w-30 h-10 p-2 rounded-md">Crear usuario</a>
        </div>
        <div class="col-span-3">
             <table class="border-collapse table-auto ">
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

                <!--<td>
                    <form action="{{route('destroyUsuarios', $usuarios)}}" method="POST">
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
   {{ $usuarios->links() }}
</div>
 </div>
@endsection
