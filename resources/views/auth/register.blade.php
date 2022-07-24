@extends('layouts.app')

@section('titulo')
    Regístrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-8 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuario" class="rounded-lg">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="name" class="mb-1 text-sm block text-gray-500 font-bold">Nombre</label>
                    <input
                    id="name"
                    name="name"
                    type="text"
                    placeholder="Tu Nombre"
                    class="border p-2 text-sm w-full rounded-lg"
                >
                </div>
                
                <div class="mb-2">
                    <label for="username" class="mb-1 text-sm block text-gray-500 font-bold">Username</label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu Nombre de Usuario"
                        class="border p-2 text-sm w-full rounded-lg"
                    >
                </div>

                <div class="mb-2">
                    <label for="email" class="mb-1 text-sm block text-gray-500 font-bold">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu Email de Registro"
                        class="border p-2 text-sm w-full rounded-lg"
                    >
                </div>

                <div class="mb-2">
                    <label for="password" class="mb-1 text-sm block text-gray-500 font-bold">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password de Registro"
                        class="border p-2 text-sm w-full rounded-lg"
                    >
                </div>

                <div class="mb-2">
                    <label for="password_confirmation" class="mb-1 text-sm block text-gray-500 font-bold">Repetir Password</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu password"
                        class="border p-2 text-sm w-full rounded-lg"
                    >
                </div>

                <input
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-2 text-sm text-white rounded-lg"    
                >
                
            </form>

        </div>
    </div>
@endsection