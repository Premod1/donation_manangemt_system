<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-3">
                        <div>
                            <h2 class="text-2xl font-bold mb-6">Users List</h2>
                        </div>
                        <div>
                            <a href="{{ route('admin.users.create') }}"
                                class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                                Create User
                            </a>
                        </div>
                    </div>

                    @if (session('success'))
                        <x-notification type="success" :message="session('success')" />
                    @endif

                    @if (session('error'))
                        <x-notification type="error" :message="session('error')" />
                    @endif

                    <div class="overflow-x-auto">
                        <table
                            class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 bg-white dark:bg-gray-800 rounded-lg">
                            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Name</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Email</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Roles</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse($users as $index => $user)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 text-sm font-semibold">
                                           {{ $user->name }}
                                        </td>
                                        <td class="px-6 py-4 text-sm">
                                            {{ $user->email }}
                                        </td>
                                        <td class="px-6 py-4 text-sm">
                                            {{ $user->getRoleNames()->implode(', ') }}
                                        </td>
                                        <td class="px-6 py-4 text-sm">
                                            <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}"
                                                class="text-blue-600 hover:text-blue-800" title="Edit">
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                     <path stroke-linecap="round" stroke-linejoin="round"
                                                         stroke-width="2"
                                                         d="M11 5H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                                 </svg>
                                             </a>

                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"
                                            class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                            No donations found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $users->links() }}  <!-- This will generate the pagination links -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
