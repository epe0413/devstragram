@extends('layouts.app')

@section('titulo')
    {{$post->titulo}}
@endsection

@section('contenido')
    <div class="container mx-auto md:flex gap-x-5">
        <div class="md:w-1/2">
            <img
                src="{{ asset('uploads' . '/' . $post->imagen) }}"
                alt="Imagen del post {{ $post->titulo }}"
                class="rounded-xl"
            >
            <div class="p-3">
                <p>0 Likes</p>
            </div>
            <div>
                <p class="font-bold">{{ $post->user->username }}</p>
                <p class="text-sm text-gray-500">
                    {{ $post->created_at->diffForHumans() }}
                </p>
                <p class="mt-3">{{ $post->descripcion}}</p>
            </div>
        </div>
        <div class="md:w-1/2 px-3">
            <div class="shadow bg-white p-3 mb-3 rounded-lg">
                @auth
                    <p class="text-xl font-bold text-center mb-4">Agrega un Nuevo Comentario</p>

                    <form>
                        <div class="mb-2">
                            <label for="Comentario" class="mb-1 text-sm block text-gray-500 font-bold">
                                Añade un comentario
                            </label>
                            <textarea
                                id="Comentario"
                                name="Comentario"
                                placeholder="Agrega un comentario"
                                class="border p-2 text-sm w-full rounded-lg @error('name')
                                border-red-500 @enderror"
                            ></textarea>
                            @error('comentario')
                                <p class="bg-red-500 text-white my-2 text-sm p-2 rounded-lg text-center">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
        
                        <input
                            type="submit"
                            value="Comentar"
                            class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold w-full p-2 text-sm text-white rounded-lg"    
                        >
                    </form>
                @endauth
            </div>
        </div>
    </div>
@endsection