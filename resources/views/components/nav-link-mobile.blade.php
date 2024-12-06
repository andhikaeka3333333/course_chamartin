@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full px-4 py-2 text-sm font-medium text-gray-900 dark:text-gray-100 bg-indigo-100 dark:bg-indigo-700 rounded-lg focus:outline-none focus:bg-indigo-200 dark:focus:bg-indigo-600 transition duration-150 ease-in-out'
            : 'block w-full px-4 py-2 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg focus:outline-none focus:bg-gray-200 dark:focus:bg-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
