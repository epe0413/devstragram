@extends('layouts.app')

@section('titulo')
    Perfil: {{$user->username}}
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="Imagen Usuario"/>
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-5 md:py-5">
                <p class="text-gray-700 text-xl">{{ $user->username }}</p>
                <p class="text-gray-800 text-sm mb-3 font-bold mt-3">
                    0
                    <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Siguiendo</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Posts</span>
                </p>
            </div>
        </div>
    </div>

    <section class="container mx-auto mt-5">
        <h2 class="font-black text-center text-2xl my-5">Publicaciones</h2>

        @if($posts->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($posts as $post)
                    <div>
                        <a href="{{ route('posts.show', $post) }}">
                            <img
                                src="{{ asset('uploads') . '/' . $post->imagen }}"
                                alt="Imagen del Post {{$post->titulo}}"
                                class="rounded-md"
                            >
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="my-5">
                {{ $posts->links('pagination::tailwind')}}
            </div>
        
        @else
            <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay posts</p>
        @endif

        
    </section>
@endsection