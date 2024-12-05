<a {{ $attributes }}
   class="{{ $active ? 'bg-blue-900 text-white' : 'text-gray-500' }} rounded-lg px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
