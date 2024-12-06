<x-app-layout>

    <div class="p-5 mb-4 bg-light rounded-3" style="background-color: white;">
        <!-- Gunakan Flexbox -->
        <div class="d-flex align-items-center justify-content-between py-5"
            style="display: flex; align-items: center; gap: 2rem; margin: 0; background-color: white;">

            <!-- Bagian teks -->
            <div style="flex: 1; padding-left: 3rem;">
                <h1 style="font-size: 4rem; font-weight: bold; margin-bottom: 0;">
                    Welcome {{ auth()->user()->name }}
                </h1>
                <h2 style="font-size: 4rem; font-weight: bold;">
                    to Chamartin
                </h2>
                <p style="max-width: 600px; font-size: 1.25rem;" class="fs-4">
                    Chamartin adalah platform belajar coding online yang dirancang untuk siapa saja yang ingin
                    memulai perjalanan di dunia pemrograman. Dengan modul pembelajaran yang interaktif dan mentor
                    berpengalaman, kamu akan belajar bahasa pemrograman populer seperti Python, JavaScript, dan
                    React. Pelajari coding kapan saja dan di mana saja dengan fleksibilitas yang tinggi.
                    Bergabunglah dengan komunitas pembelajar yang aktif dan saling mendukung.
                </p>
            </div>

            <!-- Bagian gambar -->
            <div style="flex: 1; text-align: center; padding-right: 3rem;">
                <img src="images/heroimg.png" alt="Gambar Ilustrasi"
                    style="max-width: 100%; height: auto; border-radius: 15px; object-fit: cover; display: block;">
            </div>
        </div>

    </div>

</x-app-layout>
