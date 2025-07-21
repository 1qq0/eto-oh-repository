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
    @if(app()->environment('production'))
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <style>
            svg { max-width: 100%; height: auto; }
            .h-9 { height: 2.25rem !important; }
            .w-auto { width: auto !important; }
            svg[viewBox] { max-width: 100%; height: auto; }
            .h-4 { height: 1rem !important; }
            .w-4 { width: 1rem !important; }
            .h-6 { height: 1.5rem !important; }
            .w-6 { width: 1.5rem !important; }
        </style>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        .background-gif {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
            pointer-events: none;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 1rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased relative overflow-hidden">

    <!-- ✅ Background GIF only once -->
    <img src="{{ asset('images/login-bg.gif') }}" alt="Background" class="background-gif">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="flex items-center gap-2 justify-center">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            @if (request()->routeIs('login'))
                <span class="text-xl font-semibold text-gray-100">Login</span>
            @elseif (request()->routeIs('register'))
                <span class="text-xl font-semibold text-gray-100">Register</span>
            @endif
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 glass-card">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
