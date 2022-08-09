<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram | @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <header class="p-3 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-lg font-black">
                    DevStagram
                </h1>

                @auth
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold text-gray-600 text-xs" href="#">
                            Hola: <span class="font-normal"> {{ auth()->user()->username}} </span>
                        </a>
                        <form method="POST", action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-xs" href="{{ route('logout') }}">Cerrar Sesión</button>
                        </form>
                    </nav>
                @endauth

                @guest
                    <nav class="flex gap-2 items-center">
                        <a class="font-bold uppercase text-gray-600 text-xs" href="{{ route('login')}}">Login</a>
                        <a class="font-bold uppercase text-gray-600 text-xs" href="{{ route('register') }}">Crear Cuenta</a>
                    </nav>
                @endguest

            </div>   
        </header>
        <main class="container mx-auto mt-5">
            <h2 class="font-black text-center text-2xl mb-5">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        <footer class="mt-5 text-center p-2 text-sm text-gray-500 font-bold uppercase">
            DevStagram - Todos los derechos reservados 
            {{ now()->year }}
        </footer>
    </body>
</html>
