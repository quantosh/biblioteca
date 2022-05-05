@extends('layauds.plantilla')

@section('cuerpo')

<div>
    <div class="m-auto">
    {{ 'Bienbenido a la biblioteca Alhandalus usuario ' . Auth::user()->name . ' te has registrado con éxito.'   }}
</div>
<div>
    <a href="{{ route('login') }}">Inicar sesión</a>
</div>
</div>


@endsection
