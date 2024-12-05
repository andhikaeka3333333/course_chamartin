<x-app-layout>
    <main style="background-image: url('images/BGHOME.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <div class="row">
                    <div class="col-md-1">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <!-- Gunakan Flexbox -->
                <div class="d-flex align-items-center justify-content-between py-5">
                    <!-- Bagian teks -->
                    <div style="flex: 1; padding-left: 3rem;">
                        <h1 style="font-size: 4rem; font-weight: bold; margin-bottom: 0;">
                            Welcome {{ auth()->user()->name }}
                        </h1>
                        <h2 style="font-size: 4rem; font-weight: bold;">
                            to Chamartin
                        </h2>
                        <p style="max-width: 600px; font-size: 1.25rem;" class="fs-4">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                        </p>
                    </div>

                    <!-- Bagian gambar -->
                    <div style="flex: 1; text-align: center;">
                        <img src="images/Ngoding.png" alt="Coding Illustration" style="width: 100%; max-width: 400px; height: auto; border-radius: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
