<a {{ $attributes }}
   class="{{ $active ? 'bg-[#2d3e50] text-white hover:bg-[#393e47] text-white' : 'text-gray-500 hover:bg-[#EBEDF1]' }}
          rounded-lg px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}
</a>
