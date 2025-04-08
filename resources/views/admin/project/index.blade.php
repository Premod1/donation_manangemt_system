<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between">
                        <div>
                            <h2 class="text-2xl font-bold mb-4">Projects</h2>
                        </div>
                        <div class="mb-4">
                            <a href="{{ route('admin.projects.create') }}"
                               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Create Project
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
                            class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg">
                            <thead>
                                <tr class="bg-gray-200 dark:bg-gray-700 text-left text-gray-700 dark:text-gray-200">
                                    <th class="px-6 py-3 border-b">#</th>
                                    <th class="px-6 py-3 border-b">Project Name</th>
                                    <th class="px-6 py-3 border-b">Description</th>
                                    <th class="px-6 py-3 border-b">Target Amount</th>
                                    <th class="px-6 py-3 border-b">Current Amount</th>
                                    <th class="px-6 py-3 border-b">progress(%)</th>
                                    <th class="px-6 py-3 border-b">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $index => $project)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 border-b">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 border-b">{{ $project->name }}</td>
                                        <td class="px-6 py-4 border-b">{{ Str::limit($project->description, 50) }}</td>
                                        <td class="px-6 py-4 border-b">
                                            {{ number_format($project->target_amount, 2) }}
                                        </td>
                                        <td class="px-6 py-4 border-b">
                                            {{ number_format($project->current_amount, 2) }}
                                        </td>
                                        <td class="px-6 py-4 border-b">{{ number_format($project->progress, 2) }}%</td>
                                        <td class="px-6 py-4 border-b space-x-2">
                                            <!-- Edit Button -->
                                            <a href="{{ route('admin.projects.edit', $project->project_id) }}"
                                                class="text-blue-600 hover:text-blue-800 inline-flex items-center"
                                                title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 4h2M12 2v2m2.121 2.121l1.415 1.415m-1.415-1.415L14.121 6.88M5 13l4 4L19 7" />
                                                </svg>
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="{{ route('admin.projects.destroy', $project->project_id) }}"
                                                method="POST" class="inline"
                                                onsubmit="return confirm('Are you sure you want to delete this project?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-800 inline-flex items-center"
                                                    title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6"
                                            class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">No projects
                                            found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
