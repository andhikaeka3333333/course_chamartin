<section class="space-y-8 p-6 bg-gradient-to-br from-blue-100 via-purple-50 to-blue-50 rounded-lg shadow-lg">
    <header>
        <h2 class="text-xl font-bold text-gray-800">
            {{ __('Delete Account') }}
        </h2>
        <p class="mt-2 text-sm text-gray-700">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        class="flex items-center px-4 py-2 text-white bg-gradient-to-r from-blue-400 to-purple-500 hover:from-purple-500 hover:to-blue-400 transition-colors rounded-md shadow-md focus:ring focus:ring-purple-200"
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
        {{ __('Delete Account') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-white rounded-lg shadow-md">
            @csrf
            @method('delete')

            <h2 class="text-lg font-bold text-gray-800">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>
            <p class="mt-2 text-sm text-gray-700">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-4">
                <x-input-label for="password" value="{{ __('Password') }}" class="block text-gray-600" />
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-purple-200 focus:border-purple-400"
                    placeholder="{{ __('Password') }}"
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-red-600" />
            </div>

            <div class="mt-6 flex justify-end space-x-4">
                <x-secondary-button
                    x-on:click="$dispatch('close')"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition"
                >
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button
                    class="px-4 py-2 text-white bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-500 rounded-md shadow-md transition"
                >
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
