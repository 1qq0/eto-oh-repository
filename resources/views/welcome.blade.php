<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Domain Expansion</title>

    @if(app()->environment('production'))
        <script src="https://cdn.tailwindcss.com"></script>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Inter', sans-serif;
            color: #f3f4f6; /* light text */
        }

        .background-gif {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
            opacity: 1; /* Full visibility of background */
        }

        .glass-card {
            background: rgba(20, 20, 20, 0.7); /* dark semi-transparent card */
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
            max-width: 400px;
            width: 90%;
        }

        @media (max-width: 640px) {
            .glass-card {
                margin: 1rem;
                padding: 1.5rem;
            }
        }

        .btn {
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .btn-secondary {
            background-color: #374151;
            color: #f9fafb;
        }

        .btn-secondary:hover {
            background-color: #4b5563;
        }
    </style>
</head>
<body class="flex items-center justify-center relative min-h-screen overflow-hidden bg-transparent">

    <!-- Background GIF -->
    <img src="{{ asset('images/login-bg.gif') }}" alt="Background" class="background-gif">

    <!-- Main Content -->
    <div class="glass-card text-center">
        <span style="font-size:3rem;">🌌</span>
        <h1 class="text-2xl font-bold mt-4 mb-2 text-white">Welcome to Domain 🌀</h1>
        <p class="text-gray-300 mb-6">Access the booking realm by logging in or signing up.</p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
        </div>
    </div>

</body>
</html>
