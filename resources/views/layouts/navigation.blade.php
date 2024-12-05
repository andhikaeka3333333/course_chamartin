<nav class="bg-black shadow-md" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-white text-xl font-bold">Chamartin</a>
            </div>
            <!-- Right menu -->
            <div class="hidden md:flex items-center space-x-8">
                <x-navigation-link href="/" :active="request()->is('/')" class="text-white hover:text-gray-300">Home</x-navigation-link>
                <x-navigation-link href="/learn" :active="request()->is('learn')" class="text-white hover:text-gray-300">Learn</x-navigation-link>
                <x-navigation-link href="/rank" :active="request()->is('rank')" class="text-white hover:text-gray-300">Rank</x-navigation-link>
                <x-navigation-link href="/faq" :active="request()->is('faq')" class="text-white hover:text-gray-300">FAQ</x-navigation-link>

                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-gray-300 bg-black focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="text-black">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" class="text-black"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
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
    <div x-show="isOpen" class="md:hidden bg-black">
        <div class="space-y-1 px-4 pt-2 pb-3 text-white">
            <x-nav-link-mobile href="/" :active="request()->is('/')" class="text-white hover:bg-gray-700">Home</x-nav-link-mobile>
            <x-nav-link-mobile href="/learn" :active="request()->is('learn')" class="text-white hover:bg-gray-700">Learn</x-nav-link-mobile>
            <x-nav-link-mobile href="/rank" :active="request()->is('rank')" class="text-white hover:bg-gray-700">Rank</x-nav-link-mobile>
            <x-nav-link-mobile href="/faq" :active="request()->is('faq')" class="text-white hover:bg-gray-700">FAQ</x-nav-link-mobile>

            <!-- Mobile Auth Links -->
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="block rounded-md px-4 py-2 text-white hover:bg-gray-700">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="block rounded-md px-4 py-2 text-white hover:bg-gray-700">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="block rounded-md px-4 py-2 text-white hover:bg-gray-700">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>
