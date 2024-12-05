<nav class="bg-white shadow-md" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-blue-900 text-xl font-bold">Chamartin</a>
            </div>
            <!-- Right menu -->
            <div class="hidden md:flex items-center space-x-8">
                <x-navigation-link href="/" :active="request()->is('/')">Home</x-navigation-link>
                <x-navigation-link href="/learn" :active="request()->is('learn')">Learn</x-navigation-link>
                <x-navigation-link href="/rank" :active="request()->is('rank')">Rank</x-navigation-link>
                <x-navigation-link href="/faq" :active="request()->is('faq')">FAQ</x-navigation-link>

                @if (Route::has('login'))
                    @auth
                        <!-- Link ke Dashboard jika sudah login -->
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                    @else
                        <!-- Tombol Login -->
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-gray-300 transition hover:bg-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Log in
                        </a>

                        <!-- Tombol Register jika route tersedia -->
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-white bg-blue-600 transition hover:bg-blue-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500">
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-16 6h16" />
                    </svg>
                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile dropdown -->
    <div x-show="isOpen" class="md:hidden">
        <div class="space-y-1 px-4 pt-2 pb-3">
            <x-nav-link-mobile href="/" :active="request()->is('/')">Home</x-nav-link-mobile>
            <x-nav-link-mobile href="/learn" :active="request()->is('learn')">Learn</x-nav-link-mobile>
            <x-nav-link-mobile href="/rank" :active="request()->is('rank')">Rank</x-nav-link-mobile>
            <x-nav-link-mobile href="/faq" :active="request()->is('faq')">FAQ</x-nav-link-mobile>

            <!-- Mobile Auth Links -->
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="block rounded-md px-4 py-2 text-gray-700 hover:bg-gray-100">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="block rounded-md px-4 py-2 text-gray-700 hover:bg-gray-100">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="block rounded-md px-4 py-2 text-gray-700 hover:bg-gray-100">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>
