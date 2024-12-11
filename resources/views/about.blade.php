<x-layout-welcome>
    <x-slot:title>{{ $title }}</x-slot>

    <header class="bg-[#2d3e50] text-white py-6">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-3xl font-bold">Meet Our Team</h1>
            <p class="text-gray-300 mt-2">Learn more about the amazing people behind our projects!</p>
        </div>
    </header>

    <!-- Team Profiles Section -->
    <main class="max-w-7xl mx-auto px-4 py-12">


        <section class="flex flex-col md:flex-row items-center max-w-7xl mx-auto px-4 py-6 mb-20">
            <!-- Text Section -->
            <div class="flex-1 text-left mb-6 md:mb-0 ">
              <h1 class="text-4xl md:text-3xl font-bold text-gray-800 mb-4">
                About <span class="text-[#2d3e50]">Us</span>?
              </h1>
              <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-4">
                Chamartin Course adalah platform yang dirancang oleh pelajar SMK Raden Umar Said yang berlokasi di Kabupaten Kudus, Jawa Tengah, Indonesia. Kami merupakan pelajar Sekolah Menengah Kejuruan, yang mengambil kompetensi keahlian Rekayasa Perangkat Lunak.
              </p>
              <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                Kami ingin mengenalkan dunia coding kepada masyarakat dan pelajar, karena pemrograman di zaman sekarang sangat penting.
              </p>
            </div>

            <!-- Image Section -->
            <div class="flex-1 flex justify-center">
              <img src="images/team.jpg" alt="Gambar Orang" class="size-4/5 md:size-4/5">
            </div>
          </section>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="group bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="images/dhika.jpg" alt="Andhika Eka Santosa" class="w-full h-96 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 group-hover:text-[#2d3e50] transition-colors duration-300">
                        Andhika Eka Santosa
                    </h2>
                    <p class="text-gray-600 mt-2">
                        Saya sebagai Lead Programmer menyatakan dedikasi saya untuk memberi dampak kepada masyarakat.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="images/rayhan.jpg" alt="Rayhan Fatturahman Rabbani" class="w-full h-96 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 group-hover:text-[#2d3e50] transition-colors duration-300">
                        Rayhan Fathurrahman Rabbani
                    </h2>
                    <p class="text-gray-600 mt-2">
                        Saya sebagai UI/UX Designer sekaligus developer sangat bahagia karena bisa memberi dampak bagi masyarakat
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="images/yodik.jpg" alt="Yusuf Rizqy Mubarok" class="w-full h-96 object-cover">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 group-hover:text-[#2d3e50] transition-colors duration-300">
                        Yusuf Rizqy Mubarok
                    </h2>
                    <p class="text-gray-600 mt-2">
                        Saya sebagai developer Chamartin, saya sangat bangga dengan dedikasi saya sebagai developer
                </div>
            </div>
        </div>
    </main>
</x-layout-welcome>
