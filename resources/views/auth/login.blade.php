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
<body class="font-sans text-gray-100 antialiased" style="background: url('/images/login-bg.gif') no-repeat center center fixed; background-size: cover;">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="flex items-center gap-2 justify-center">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-white" />
            </a>
            <span class="text-xl font-semibold text-white">Login</span>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 border border-white/30 rounded-lg shadow-lg backdrop-blur-md bg-white/10">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-white">Email</label>
                    <input id="email" class="mt-1 block w-full rounded-md bg-white/20 border-white/50 text-white placeholder-white focus:ring-2 focus:ring-blue-400" type="email" name="email" required autofocus autocomplete="username" placeholder="you@example.com">
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-sm font-medium text-white">Password</label>
                    <input id="password" class="mt-1 block w-full rounded-md bg-white/20 border-white/50 text-white placeholder-white focus:ring-2 focus:ring-blue-400" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-white/50 bg-white/10 text-blue-600 shadow-sm focus:ring-blue-400" name="remember">
                        <span class="ml-2 text-sm text-white">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-white hover:text-gray-300 mr-3" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif

                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
