<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-6 py-2 bg-gradient-to-r from-blue-500 to-purple-500 text-white font-medium rounded-lg shadow-md hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500']) }}>
    {{ $slot }}
</button>
