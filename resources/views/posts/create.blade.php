@extends('layouts.app')

@section('titulo')
    Crea una nueva Publicación
@endsection

@section('contenido')

    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-5">
            imagen aquí
        </div>
        <div class="md:w-1/2 p-5 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-2">
                    <label for="titulo" class="mb-1 text-sm block text-gray-500 font-bold">
                        Titulo
                    </label>
                    <input
                        id="titulo"
                        name="titulo"
                        type="text"
                        placeholder="Titulo de la publicación"
                        class="border p-2 text-sm w-full rounded-lg @error('name')
                        border-red-500 @enderror"
                        value="{{ old('titulo') }}"
                    />
                    @error('titulo')
                        <p class="bg-red-500 text-white my-2 text-sm p-2 rounded-lg text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="descripcion" class="mb-1 text-sm block text-gray-500 font-bold">
                        Descripción
                    </label>
                    <textarea
                        id="descripcion"
                        name="descripcion"
                        placeholder="Descripción de la publicación"
                        class="border p-2 text-sm w-full rounded-lg @error('name')
                        border-red-500 @enderror"
                    >{{ old('descripcion') }}</textarea>
                    @error('descripcion')
                        <p class="bg-red-500 text-white my-2 text-sm p-2 rounded-lg text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <input
                    type="submit"
                    value="Publicar"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-2 text-sm text-white rounded-lg"    
                >
            </form>
        </div>
    </div>

@endsection