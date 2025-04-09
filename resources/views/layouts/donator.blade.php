<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donator Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- If using Vite --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100 h-screen">

   <!-- Sidebar -->
<div class="w-64 bg-purple-600 text-white h-full p-4">
    <h1 class="text-xl font-bold mb-6">Donator Dashboard</h1>

    <ul class="space-y-2">
        <li>
            <a href="{{ route('donator.dashboard') }}"
               class="block w-full text-left px-4 py-2 rounded-md transition-all duration-200
                      {{ request()->routeIs('donator.dashboard') ? 'bg-purple-800' : 'hover:bg-purple-700' }}">
               Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('donator.donate.index') }}"
               class="block w-full text-left px-4 py-2 rounded-md transition-all duration-200
                      {{ request()->routeIs('donator.donate.index') ? 'bg-purple-800' : 'hover:bg-purple-700' }}">
               Donations List
            </a>
        </li>
    </ul>
</div>


    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Top Nav with Profile and Logout -->
        <div class="flex justify-between items-center p-4 bg-white shadow-md">
            <div class="flex justify-between items-center w-full">
                <div>
                    <span class="font-bold text-xl">Welcome, {{ auth()->user()->name }}</span>
                </div>
                <div class="relative">
                    <button id="profileButton" class="bg-purple-600 text-white py-2 px-4 rounded-md">
                        Profile
                    </button>
                    <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-md hidden">
                        <a href="{{ route('donator.dashboard') }}" class="block px-4 py-2 text-gray-700">Profile</a>
                        <a href="{{ route('donator.dashboard') }}" class="block px-4 py-2 text-gray-700">Settings</a>
                        <form action="{{ route('logout') }}" method="POST" class="block">
                            @csrf
                            <button type="submit" class="w-full px-4 py-2 text-gray-700 text-left">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="p-6 overflow-auto flex-1">
            @yield('content')
        </div>
    </div>

    <script>
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!profileButton.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
