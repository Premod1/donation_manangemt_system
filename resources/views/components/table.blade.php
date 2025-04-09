<div class="overflow-x-auto bg-white dark:bg-gray-800 rounded-lg">
    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
            <tr>
                @foreach($columns as $column)
                    <th class="px-6 py-3 text-left text-sm font-medium">{{ $column }}</th>
                @endforeach
                <th class="px-6 py-3 text-left text-sm font-medium">Action</th> <!-- Add Action column header -->
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach($rows as $row)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                    @foreach($row['data'] as $data) <!-- Updated to access 'data' from the row -->
                        <td class="px-6 py-4 text-sm">{{ $data }}</td>
                    @endforeach
                    <td class="px-6 py-4 text-sm">
                        <!-- Action buttons -->
                        <a href="{{ $row['edit_url'] }}"
                           class="inline-flex items-center px-3 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 2l6 6M12 12l6 6M16 12l-6 6M8 16l6-6M12 8l-6-6" />
                            </svg>
                            Edit
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
