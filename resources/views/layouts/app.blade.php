<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-500 text-black">
    <nav class="flex py-4 bg-yellow-300 text-black h-16">
      <div class="flex items-center px-12 mr-auto">
        <a class="navbar-brand mr-4" href="#">
          <img src="adminlte/dist/img/logopres.jpeg" alt="Logo" style="width: 50px;" class="img-circle elevation-3">
        </a>
        <p class="font-bold">Simoncito A. Lamas</p>
      </div>

      <ul class=" w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
        <li class="mx-6">
          <p class="text-xl">Usuario <b>{{auth()->user()->name }}</b></p>
        </li>
        <li>
          <a href="{{route('login.destroy')}}" class="font-bold py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Salir</a>
        </li>
        @else
        <li class="flex items-center px-4">
          <a href="{{route('login.index')}}" class="font-semibold border-2 border-yellow-500 py-2 px-4 rounded-md hover:bg-yellow-500 hover:text-gray-800">Entrar</a>
        </li>
        <li class="flex items-center px-4" >
          <a href="{{route('register.index')}}" class="font-semibold border-2 border-yellow-500 py-2 px-4 rounded-md hover:bg-yellow-500 hover:text-gray-800">Registrarse</a>
        @endif
      </ul>
    </nav>
    @yield('content')
  </body>
</html>