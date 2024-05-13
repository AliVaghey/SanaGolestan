<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if(isset($description))
            {{ $description }}
        @endif
        @if(isset($keywords))
            {{ $keywords }}
        @endif

        @if(isset($title))
            @php($title .= " - سناء گلستان")
        @else
            @php($title = "سناء گلستان")
        @endif
        <title>{{ $title }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body dir="rtl" class="antialiased absolute left-0 top-0">
        <div class="min-h-screen bg-white">
            <livewire:layout.landingNav />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <livewire:layout.LandingFooter />
        </div>
    </body>
</html>
