<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'tobenskiBooking') }} @auth - {{ Auth::user()->name }} @endauth</title>



        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <script src="https://kit.fontawesome.com/c4b1104435.js" crossorigin="anonymous"></script>
    </head>
    <body class="h-screen">
        @livewire('navbar')
        <main class="flex w-full bg-gray-300 flex-col md:flex-row h-full pt-6">
            @auth
                <aside class="w-72">
                    {{ $sidebar }}
                </aside>
                <section class="flex flex-col w-full justify-start md:pl-6 pr-4 items-start">
                    {{ $slot }}
                </section>
            @endauth

            @guest
                {{ $slot }}
            @endguest
        </main>
    @livewireScripts
    </body>
</html>
