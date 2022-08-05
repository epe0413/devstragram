@extends('layouts.app')

@section('titulo')
    Inicia Sesión en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-8 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="Imagen login de usuario" class="rounded-lg">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('login')}}" novalidate>
                @csrf

                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 text-sm p-2 rounded-lg text-center">
                        {{ session('mensaje') }}
                    </p>
                @endif

                <div class="mb-2">
                    <label for="email" class="mb-1 text-sm block text-gray-500 font-bold">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu Email de Registro"
                        class="border p-2 text-sm w-full rounded-lg @error('email')
                        border-red-500                            
                        @enderror"
                        value="{{ old('email') }}"
                    >
                    @error('email')
                        <p class="bg-red-500 text-white my-2 text-sm p-2 rounded-lg text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="password" class="mb-1 text-sm block text-gray-500 font-bold">Password</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password de Registro"
                        class="border p-2 text-sm w-full rounded-lg @error('password')
                        border-red-500                            
                        @enderror"
                    >
                    @error('password')
                        <p class="bg-red-500 text-white my-2 text-sm p-2 rounded-lg text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <input
                    type="submit"
                    value="Iniciar Sesión"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-2 text-sm text-white rounded-lg"    
                >
                
            </form>

        </div>
    </div>
@endsection