@extends('layauds.plantilla')

@section('cuerpo')

    <h1 class="text-center text-2xl"> {{'Bienvenido '. Auth::user()->name . ' tiene permiso para trabajar en la biblioteca' }}</h1>

@endsection
