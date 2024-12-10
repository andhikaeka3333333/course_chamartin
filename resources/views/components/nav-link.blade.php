@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#3a4b5e] text-sm font-medium leading-5 text-[#3a4b5e] focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-black-600 dark:text-gray-300 hover:text-[#3a4b5e] dark:hover:text-[#3a4b5e] hover:border-[#3a4b5e] dark:hover:border-[#3a4b5e] focus:outline-none focus:text-[#3a4b5e] dark:focus:text-[#3a4b5e] focus:border-[#3a4b5e] dark:focus:border-[#3a4b5e] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
