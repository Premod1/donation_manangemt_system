@props(['type' => 'success', 'message' => ''])

@php
    $colors = [
        'success' => 'text-green-700 bg-green-100 dark:bg-green-800 dark:text-green-200',
        'error' => 'text-red-700 bg-red-100 dark:bg-red-800 dark:text-red-200',
    ];
@endphp

<div
    x-data="{ show: true }"
    x-show="show"
    x-init="setTimeout(() => show = false, 4000)"
    x-transition
    class="mb-4 p-4 text-sm rounded-lg {{ $colors[$type] ?? $colors['success'] }}"
>
    {{ $message }}
</div>
