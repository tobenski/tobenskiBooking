<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>tobenskiBooking - {{ Auth::user()->name }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
    </head>
    <body class="h-screen">
        <nav class="w-full bg-gray-900 text-2xl text-red-600 px-6 py-2 font-mono font-semibold fixed">
            tobenski<span class="text-white">Booking</span>

        </nav>

        <main>
            {{ $slot }}
        </main>


        <footer class="fixed bottom-0 w-full p-4 bg-gray-900 text-white text-sm">
            FOOTER
        </footer>
    @livewireScripts
    </body>
</html>
