<div class="w-64 bg-blue-600 text-white min-h-screen p-4">
    <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>

    <ul class="space-y-2">
        <li>
            <a href="{{ route('dashboard') }}"
               class="block w-full px-4 py-2 rounded-md text-left transition duration-200
               {{ request()->routeIs('dashboard') ? 'bg-blue-800' : 'hover:bg-blue-700' }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.users.index') }}"
               class="block w-full px-4 py-2 rounded-md text-left transition duration-200
               {{ request()->routeIs('users.index') ? 'bg-blue-800' : 'hover:bg-blue-700' }}">
                Users
            </a>
        </li>
        <li>
            <a href="{{ route('projects.index') }}"
               class="block w-full px-4 py-2 rounded-md text-left transition duration-200
               {{ request()->routeIs('projects.index') ? 'bg-blue-800' : 'hover:bg-blue-700' }}">
                Projects
            </a>
        </li>
        <li>
            <a href="{{ route('donation.index') }}"
               class="block w-full px-4 py-2 rounded-md text-left transition duration-200
               {{ request()->routeIs('donation.index') ? 'bg-blue-800' : 'hover:bg-blue-700' }}">
                Donations
            </a>
        </li>
    </ul>
</div>
