@extends('layouts.app')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@section('title', 'Inicio de Sesion')
<link rel="shortcut icon" href="adminlte/dist/img/Logopres.jpeg" type="image/x-icon">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>
<body>
@section('content')
<div class="bg-cover bg-center bg-fixed" style="background-image: url('{{ asset('images/wa3.jpg') }}')">
    <div class="h-screen flex justify-center items-center">
        <div class="bg-white mx-4 p-8 rounded shadow-md w-full md:w-1/2 lg:w-1/3">
            <div class="block mx-auto w-1/3">
                <img src="{{ asset('images/logopres.jpeg') }}" alt="">
            </div>
            <h1 class="text-3xl font-bold mb-8 text-black text-center">Bienvenido al Sistema</h1>
            <form class="mt-4" method="POST" action="">
                @csrf
                @error('message')
                    <p class="border border-red-500 rounder-md bg-red-100 w-full text-red-600 p-2 my-2">{{ $message }}</p>
                @enderror
                <div class="input-group mb-3">
                    <input type="email" class="form-control bg-gray-200" placeholder="Correo Electronico" id="email"  name="email" >
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>

                  <div class="input-group mb-3">
                    <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control bg-gray-200">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                    {{-- <a class="text-gray-600 hover:text-gray-800" href="#">¿Olvidaste Tu Contraseña?</a> --}}
                    <div class="flex justify-center mb-6">
                </div>
                    <button
                        type="submit" class="w-full bg-yellow-300 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Acceder </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="adminlte/dist/js/adminlte.min.js"></script>
@endsection 
</body>
</html>