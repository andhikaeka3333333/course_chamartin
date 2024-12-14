<nav class="bg-white" x-data="{ isOpen: false, searchQuery: '' }">
    <!-- Notification -->
    <div id="notification"
        class="fixed top-10 left-1/2 transform -translate-x-1/2 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg opacity-0 transition-opacity duration-300"
        role="alert">
        Please enter a search query!
    </div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/"> <img src="{{ asset('images/logo.png') }}" alt="Chamartin Logo"
                            class="w-10 h-auto"></a>
                </div>

                <!-- Search Bar -->
                <div class="ml-4 hidden md:block">
                    <div class="relative">
                        <input type="text" placeholder="Search..." x-model="searchQuery"
                            class="w-full max-w-sm rounded-md border border-gray-300 px-4 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                        <button @click="handleSearch()" class="absolute right-0 top-0 mt-2 mr-2">
                            <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Nav Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link-welcome href="/learn-path" :active="request()->is('learn-path')">Learning Path</x-nav-link-welcome>
                        <x-nav-link-welcome href="/about" :active="request()->is('about')">About</x-nav-link-welcome>
                        <x-nav-link-welcome href="/purpose" :active="request()->is('purpose')">Purpose</x-nav-link-welcome>
                        <x-nav-link-welcome href="/terms" :active="request()->is('terms')">Terms</x-nav-link-welcome>
                    </div>
                </div>
            </div>

            <!-- Login & Register -->
            <div class="ml-auto hidden md:flex items-center space-x-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('home') }}"
                            class="rounded-md px-4 py-1 font-medium text-[#2d3e50] ring-1 ring-[#2d3e50] transition hover:bg-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-4 py-1 font-medium text-[#2d3e50] ring-1 ring-[#2d3e50] transition hover:bg-gray-100 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Login
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="block rounded-md px-3 py-1 font-medium text-white bg-[#2d3e50] transition hover:bg-[#1b2835]">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true" :class="{ 'hidden': isOpen, 'block': !isOpen }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true" :class="{ 'block': isOpen, 'hidden': !isOpen }">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <div class="mb-3">
                <div class="relative">
                    <input type="text" placeholder="Search..." x-model="searchQuery"
                        class="w-full rounded-md border border-gray-300 px-4 py-2 text-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    <button @click="handleSearch()"
                        class="absolute right-0 top-0 mt-2 mr-2 text-blue-500 hover:text-blue-700">
                        Search
                    </button>
                </div>
            </div>

            <x-nav-link-mobile-welcome href="/learn-path" :active="request()->is('learn-path')">Learning Path</x-nav-link-mobile-welcome>
            <x-nav-link-mobile-welcome href="/about" :active="request()->is('about')">About</x-nav-link-mobile-welcome>
            <x-nav-link-mobile-welcome href="/purpose" :active="request()->is('purpose')">Purpose</x-nav-link-mobile-welcome>
            <x-nav-link-mobile-welcome href="/terms" :active="request()->is('terms')">Terms</x-nav-link-mobile-welcome>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}"
                        class="block rounded-md px-4 py-2 mt-2 font-medium text-[#2d3e50] ring-1 ring-[#2d3e50] transition hover:bg-gray-100">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="block rounded-md px-4 py-2 mt-2 font-medium text-[#2d3e50] ring-1 ring-[#2d3e50] transition hover:bg-gray-100">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="block rounded-md px-4 py-2 mt-2 font-medium text-white bg-[#2d3e50] transition hover:bg-[#1b2835]">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>

    <script>
        function handleSearch() {
            const query = document.querySelector('[x-model="searchQuery"]').value.trim().toLowerCase();
            if (!query) {
                showNotification();
                return;
            }
            if (query.includes('about')) {
                window.location.href = '{{ url('about#about') }}';
            } else if (query.includes('learn')) {
                window.location.href = '/materi';
            } else if (query.includes('terms')) {
                window.location.href = '/terms';
            } else {
                showNotification("No results found. Try searching for 'About', 'Learn', or 'Terms'.");
            }
        }

        function showNotification(message = "Please enter a search query!") {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.classList.add('opacity-100');
            setTimeout(() => {
                notification.classList.remove('opacity-100');
            }, 3000);
        }
    </script>
</nav>
