@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-black-500 dark:border-black-700 text-sm font-medium leading-5 text-black-900 dark:text-black-300 focus:outline-none focus:border-black-600 dark:focus:border-black-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black-600 dark:text-gray-300 hover:text-black-500 dark:hover:text-black-400 hover:border-blue-300 dark:hover:border-black-600 focus:outline-none focus:text-black-600 dark:focus:text-black-500 focus:border-black-300 dark:focus:border-black-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
