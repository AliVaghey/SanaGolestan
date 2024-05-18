<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body dir="rtl" class="font-sans antialiased relative">
        <img class="absolute top-0 left-0 h-full w-screen -z-50" src="{{ Vite::image('panel-bg.jpg') }}" alt="background">
        <div class="min-h-screen w-screen flex flex-col lg:flex-row ">
            <livewire:layout.navigation />

            <div class="w-full">
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="w-full">
                        <div class="my-6 ml-5 py-6 border border-navi rounded-3xl bg-white/15 flex justify-between px-5">
                            {{ $header }}
                            <x-user></x-user>
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
