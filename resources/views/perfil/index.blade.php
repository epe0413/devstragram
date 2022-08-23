@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{ auth()->user()->username}}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-3 rounded-lg">
            <form
                class="mt-5 md:mt-0"
                method="POST"
                action="{{ route('perfil.store')}}"
                enctype="multipart/form-data"
            >
                @csrf
                <div class="mb-2">
                    <label for="username" class="mb-1 text-sm block text-gray-500 font-bold">
                        Username
                    </label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu Nombre de Usuario"
                        class="border p-2 text-sm w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}"
                    />
                    @error('username')
                        <p class="bg-red-500 text-white my-2 text-sm p-2 rounded-lg text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="username" class="mb-1 text-sm block text-gray-500 font-bold">
                        Imagen Perfil
                    </label>
                    <input
                        id="imagen"
                        name="imagen"
                        type="file"
                        class="border p-2 text-sm w-full rounded-lg"
                        value=""
                        accept=".jpg, .jpeg, .png"
                    />
                </div>

                <input
                    type="submit"
                    value="Guardar Cambios"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-2 text-sm text-white rounded-lg"    
                >
            </form>
        </div>
    </div>
@endsection