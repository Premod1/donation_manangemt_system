@extends('layouts.donator')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="text-2xl font-bold mb-4">Your Donations</h2>
        </div>
        <div>
            <a
                class="inline-block bg-purple-600 text-white px-4 py-2 rounded-lg shadow hover:bg-purple-700 transition duration-300">
                Make a Donation
            </a>
        </div>
    </div>
    <!-- Donations Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-purple-600 text-white">
                    <th class="px-4 py-2 text-left">Donation ID</th>
                    <th class="px-4 py-2 text-left">Amount</th>
                    <th class="px-4 py-2 text-left">Donation Date</th>
                    <th class="px-4 py-2 text-left">Project</th>
                    <th class="px-4 py-2 text-left">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $donation->donation_id }}</td>
                        <td class="px-4 py-2">{{ number_format($donation->amount, 2) }}</td>
                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($donation->donation_date)->format('d M Y') }}</td>
                        <td class="px-4 py-2">
                            @if ($donation->project_id)
                                @php
                                    $project = $projects->firstWhere('project_id', $donation->project_id);
                                @endphp
                                @if ($project)
                                    {{ $project->name }}
                                @endif
                            @else
                                No Project
                            @endif
                        </td>
                        <td class="px-4 py-2">
                            <span
                                class="px-2 py-1 text-xs rounded-full {{ $donation->status === 'completed' ? 'bg-green-600 text-white' : 'bg-yellow-500 text-white' }}">
                                {{ ucfirst($donation->status) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination for Donations -->
    <div class="mt-4">
        {{ $donations->links() }}
    </div>

    <h2 class="text-2xl font-bold mt-8 mb-4">Projects Table</h2>

    <!-- Projects Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow-md">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-purple-600 text-white">
                    <th class="px-4 py-2 text-left">Project ID</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Description</th>
                    <th class="px-4 py-2 text-left">Target Amount</th>
                    <th class="px-4 py-2 text-left">Current Amount</th>
                    <th class="px-4 py-2 text-left">Progress (%)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $project->project_id }}</td>
                        <td class="px-4 py-2">{{ $project->name }}</td>
                        <td class="px-4 py-2">{{ $project->description }}</td>
                        <td class="px-4 py-2">{{ number_format($project->target_amount, 2) }}</td>
                        <td class="px-4 py-2">{{ number_format($project->current_amount, 2) }}</td>
                        <td class="px-4 py-2">{{ number_format($project->progress, 2) }}%</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination for Projects -->
    <div class="mt-4">
        {{ $projects->links() }}
    </div>
@endsection
