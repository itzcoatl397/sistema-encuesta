<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
    <!-- Styles -->

</head>

<body>
    <header class="bg-red-900  ">
        <div class="grid grid-cols-3   space-x-11 items-center   md:w-1/2  xl:w-full  ">
            <div>
                <img src="{{ asset('img/logoencuesta.png') }}" alt="" class="w-1/2 p-2
                 ">
            </div>
            <div>
                <h2 class="text-white font-bold capitalize md:text-xs xl:text-2xl">SISTEMA DE ENCUESTAS
                   <span> EncuestaTec</span>
                </h1>
            </div>
            <div>

                <img src="{{ asset('img/Logo-TecNM.png') }}" alt="" class="w-1/2 p-2">
            </div>
        </div>


    </header>




    <main>
        <h1>@yield('titulo')</h1>
        @yield('contenido')
    </main>
</body>

</html>
