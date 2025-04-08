<div class="w-64 bg-blue-600 text-white p-4">
    <h1 class="text-xl mb-4">Admin Dashboard</h1>
    <ul class="space-y-4">
        <li><a href="{{ route('dashboard') }}"  class="hover:text-gray-300">Dashboard</a></li>
        <li><a href="{{ route('users.index') }}" class="hover:text-gray-300">Users</a></li>
        <li><a href="{{ route('projects.index') }}" class="hover:text-gray-300">Projects</a></li>
        <li><a href="{{ route('donation.index') }}" class="hover:text-gray-300">Donations</a></li>
    </ul>
</div>
