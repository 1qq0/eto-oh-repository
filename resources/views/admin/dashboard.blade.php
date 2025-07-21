@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6 bg-[#1a1a1a] text-white rounded-xl shadow-2xl border border-purple-800">
    <h1 class="text-4xl font-extrabold text-purple-500 mb-4 tracking-wide">🪄 Admin Dashboard</h1>

    <p class="text-lg text-gray-300">Welcome, Admin! You’ve entered the domain of control and chaos.</p>

    <div class="mt-8 space-y-4">
        <a href="{{ route('admin.users') }}" class="inline-block px-4 py-2 bg-purple-700 hover:bg-purple-600 text-white rounded transition duration-200">
            🧿 Manage Cursed Users
        </a>
        <!-- You can add more cursed buttons here -->
    </div>
</div>
@endsection
