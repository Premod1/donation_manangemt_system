<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-bold mb-6">Your Donations</h2>

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
                                    <th class="px-6 py-3 text-left text-sm font-medium">#</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Project</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Amount</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Status</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Date</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse($donations as $index => $donation)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                        <td class="px-6 py-4 text-sm">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 text-sm">
                                            @if ($donation->project_id)
                                                @php
                                                    $project = $projects->firstWhere(
                                                        'project_id',
                                                        $donation->project_id,
                                                    );
                                                @endphp
                                                @if ($project)
                                                    {{ $project->name }}
                                                @endif
                                            @else
                                                No Project
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-sm text-green-600 font-semibold">
                                            ${{ number_format($donation->amount, 2) }}
                                        </td>
                                        <td class="px-6 py-4 text-sm">
                                            <span
                                                class="px-2 py-1 text-xs rounded-full {{ $donation->status === 'completed' ? 'bg-green-600 text-white' : 'bg-yellow-500 text-white' }}">
                                                {{ ucfirst($donation->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm">
                                            {{ $donation->created_at->format('Y-m-d') }}
                                        </td>
                                        <td class="px-6 py-4 text-sm">
                                            <form
                                                action="{{ route('donation.approve', ['donation_id' => $donation->donation_id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="text-green-600 hover:text-green-800"
                                                    title="Approve">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M5 13l4 4L19 7" />
                                                    </svg>
                                                </button>
                                            </form>

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

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
