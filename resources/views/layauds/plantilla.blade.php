<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('titulo')</title>
</head>
<body>

    <header class="bg-red-50 text-center min-h-[20vh]">
        <h1 class="text-3xl text-center py-6">Biblioteca</h1>
        <nav class="w-[50vh] m-auto  border">
        <a class="p-4" href="{{ route('index') }}">Inicio</a>
        <a class="p-4" href="{{ route('autores') }}">Autores</a>
        <a class="p-4" href="{{ route('libros') }}">Libros</a>
        <a class="p-4" href="{{ route('usuarios') }}">Usuarios</a>
        <a class="p-4" href="{{ route('alquileres') }}">Alquileres</a>
        </nav>

    </header>

    <div id="contenidoPrincipal" class="p-12 min-h-[60vh] ">
       @yield('cuerpo')
    </div>

    <footer class=" bg-auto bg-[url('imgLibros.jpg')] min-h-[20vh]">

    </footer>
</body>
</html>
