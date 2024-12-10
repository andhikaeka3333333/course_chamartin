<x-layout-welcome>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="flex flex-col lg:flex-row gap-8 bg-gray-50 p-6 lg:p-16">
        <!-- Left Section (Stacked News Cards with Group Hover) -->
        <div class="relative lg:w-1/2 h-auto lg:h-96 group flex flex-col lg:block items-center">
            <!-- Card 1 -->
            <div
                class="w-60 h-60 lg:w-72 lg:h-72 bg-white shadow-lg rounded-lg overflow-hidden opacity-100 transition-all duration-300 transform group-hover:opacity-60 hover:!opacity-100 hover:scale-105 hover:z-10 mb-4 lg:mb-0 lg:absolute lg:top-0 lg:left-0"
                style="transform: rotate(-5deg);"
            >
                <img
                    src="images/berita1.png"
                    alt="News 1"
                    class="w-full h-full object-cover"
                />
            </div>
            <!-- Card 2 -->
            <div
                class="w-60 h-60 lg:w-72 lg:h-72 bg-white shadow-lg rounded-lg overflow-hidden opacity-100 transition-all duration-300 transform group-hover:opacity-60 hover:!opacity-100 hover:scale-105 hover:z-10 mb-4 lg:mb-0 lg:absolute lg:top-12 lg:left-12"
                style="transform: rotate(3deg);"
            >
                <img
                    src="images/berita2.png"
                    alt="News 2"
                    class="w-full h-full object-cover"
                />
            </div>
            <!-- Card 3 -->
            <div
                class="w-60 h-60 lg:w-72 lg:h-72 bg-white shadow-lg rounded-lg overflow-hidden opacity-100 transition-all duration-300 transform group-hover:opacity-60 hover:!opacity-100 hover:scale-105 hover:z-10 mb-4 lg:mb-0 lg:absolute lg:top-24 lg:left-24"
                style="transform: rotate(-8deg);"
            >
                <img
                    src="images/berita3.png"
                    alt="News 3"
                    class="w-full h-full object-cover"
                />
            </div>
            <!-- Card 4 -->
            <div
                class="w-60 h-60 lg:w-72 lg:h-72 bg-white shadow-lg rounded-lg overflow-hidden opacity-100 transition-all duration-300 transform group-hover:opacity-60 hover:!opacity-100 hover:scale-105 hover:z-10 lg:absolute lg:top-36 lg:left-36"
                style="transform: rotate(5deg);"
            >
                <img
                    src="images/berita4.png"
                    alt="News 4"
                    class="w-full h-full object-cover"
                />
            </div>
        </div>

        <!-- Right Section (Text Content) -->
        <div class="lg:w-1/2 flex flex-col justify-center">
            <blockquote
                class="text-gray-700 text-lg leading-relaxed italic"
            >
                "Di era digital yang terus berkembang, kemampuan coding dan pemahaman
                tentang Artificial Intelligence (AI) menjadi kebutuhan penting bagi
                generasi muda untuk bersaing di tingkat global. Berdasarkan inisiatif
                pemerintah yang mengusulkan coding dan AI masuk ke dalam kurikulum SD
                dan SMP sebagai mata pelajaran pilihan, kami hadir untuk mendukung
                langkah ini dengan menyediakan kursus coding berkualitas tinggi."
            </blockquote>
            <p class="mt-6 text-gray-600 text-base">
                Kursus coding kami dirancang khusus untuk pelajar SD dan SMP, dimulai
                dari dasar-dasar pemrograman hingga pengenalan konsep AI.
            </p>
        </div>
    </div>

    <!-- Responsive CSS -->
    <style>
        @media (max-width: 1024px) {
            .group div {
                transform: none !important;
            }
        }
    </style>
</x-layout-welcome>
