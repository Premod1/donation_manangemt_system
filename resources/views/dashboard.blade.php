<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Card Section with Colorful Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

                <!-- User Count Card -->
                <div class="bg-blue-500 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold">Total Users</h3>
                    <p class="text-3xl font-bold mt-2">{{ $userCount }}</p>
                </div>

                <!-- Project Count Card -->
                <div class="bg-green-500 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold">Total Projects</h3>
                    <p class="text-3xl font-bold mt-2">{{ $projectCount }}</p>
                </div>

                <!-- Donation Amount Card -->
                <div class="bg-yellow-500 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold">Total Donations</h3>
                    <p class="text-3xl font-bold mt-2">RS.{{ number_format($donationAmount, 2) }}</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
