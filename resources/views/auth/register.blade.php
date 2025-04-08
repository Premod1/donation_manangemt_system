<x-guest-layout>
    <form method="POST" action="{{ route('donations.store') }}">
        @csrf

        <!-- Name and Email Fields -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Donation Amount Field -->
        <div class="mb-4">
            <label for="amount" class="block text-sm font-medium text-gray-700">Donation Amount</label>
            <input type="number" step="0.01" name="amount" id="amount" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Donation Date Field -->
        <div class="mb-4">
            <label for="donation_date" class="block text-sm font-medium text-gray-700">Donation Date</label>
            <input type="date" name="donation_date" id="donation_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Project Selection (Optional) -->
        <div class="mb-4">
            <label for="project_id" class="block text-sm font-medium text-gray-700">Select Project</label>
            <select name="project_id" id="project_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="">Select a project</option>
                @foreach ($projects as $project)
                    <option value="{{ $project->project_id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md focus:ring-indigo-500 focus:border-indigo-500">Make Donation</button>
        </div>
    </form>
</x-guest-layout>
