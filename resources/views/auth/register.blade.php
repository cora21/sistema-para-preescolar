@extends('layouts.app')

@section('title', 'Registrate')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
<div class="block mx-auto w-1/2">
    <img src="{{ asset('images/Lw.png') }}" alt="">
</div>

<h1 class="text-5xl text-center pt-6">Registrate</h1>

<form action="" method="post" class="mt-4">
    @csrf
    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placerbolder-gray-900 p-2 my-2 focues:bg-white" placeholder="Nombre" id="name" name="name">

    @error('name')
        <p class="border border-red-500 rounder-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placerbolder-gray-900 p-2 my-2 focues:bg-white" placeholder="Correo" id="email" name="email">

    @error('email')
        <p class="border border-red-500 rounder-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placerbolder-gray-900 p-2 my-2 focues:bg-white" placeholder="Contraseña" id="password" name="password">

    @error('password')
        <p class="border border-red-500 rounder-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placerbolder-gray-900 p-2 my-2 focues:bg-white" placeholder="Confirmar Contraseña" id="password_confirmation" name="password_confirmation">

    <button type="password" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">
        Registrarse
    </button>

</form>
</div>
@endsection 