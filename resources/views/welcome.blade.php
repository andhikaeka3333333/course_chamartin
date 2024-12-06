<x-layout-welcome>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="flex flex-col items-center text-center py-20 px-8 lg:px-20">
        <h1 class="text-5xl font-bold text-[#2d3e50] leading-snug">
            Upgrade dirimu Menjadi Developer Profesional
        </h1>
        <p class="text-gray-600 mt-6">
            #BelajarBerdampak bersama Chamartin dengan tingkatkan keterampilan digital & raih karir impian kamu.
        </p>
        <a href="{{ route('login') }}"
            class="mt-6 block rounded-md px-6 py-3 font-medium text-white bg-[#2d3e50] transition hover:bg-[#1b2835]">
            Belajar Sekarang
        </a>
        <p class="mt-6 text-gray-600 ">
            Lebih dari <span class="font-bold">1 Ribu+</span> Orang belajar di Chamartin
        </p>

        <div class="flex flex-wrap justify-center gap-3 mt-10">
            <span class="bg-gray-200 text-gray-800 px-3 py-1 text-xs sm:text-sm rounded-full truncate">
                Web Development
            </span>
            <span class="bg-gray-200 text-gray-800 px-3 py-1 text-xs sm:text-sm rounded-full truncate">
                Android Development
            </span>
            <span class="bg-gray-200 text-gray-800 px-3 py-1 text-xs sm:text-sm rounded-full truncate">
                IoT
            </span>
            <span class="bg-gray-200 text-gray-800 px-3 py-1 text-xs sm:text-sm rounded-full truncate">
                Game Development
            </span>
            <span class="bg-gray-200 text-gray-800 px-3 py-1 text-xs sm:text-sm rounded-full truncate">
                Figma
            </span>
            <span class="bg-gray-200 text-gray-800 px-3 py-1 text-xs sm:text-sm rounded-full truncate">
                Database MySQL
            </span>
        </div>

    </div>
    <section id="testimonials" class="py-10 bg-gray-100 mt-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Apa Kata Pengguna Tentang Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                @foreach ($testimonials as $testimonial)
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <img src="{{ $testimonial->photo_url }}" alt="{{ $testimonial->name }}"
                            class="w-16 h-16 rounded-full mx-auto">
                        <h3 class="mt-4 font-bold">{{ $testimonial->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $testimonial->position }}</p>
                        <p class="mt-2 text-gray-800">{{ $testimonial->message }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="relative overflow-hidden bg-gray-100 py-4">
        <div class="absolute inset-0 bg-[#e3faff]"></div>
        <div class="relative flex animate-marquee gap-4">
            <div class="flex-shrink-0 flex space-x-4">
                <span
                    class="bg-green-400 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-100">
                    Pemula
                </span>
                <span
                    class="bg-blue-600 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    Web Development
                </span>
                <span
                    class="bg-green-500 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    Mobile Development
                </span>
                <span
                    class="bg-purple-500 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    Game Development
                </span>
                <span
                    class="bg-yellow-400 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    IoT
                </span>
                <span
                    class="bg-indigo-600 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    Artificial Intelligence
                </span>
                <span
                    class="bg-pink-400 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    UI/UX
                </span>
                <span
                    class="bg-teal-500 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    3D Animation
                </span>
                <span
                    class="bg-orange-400 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    Figma
                </span>
                <span
                    class="bg-gray-500 rounded-full px-4 py-2 text-xs sm:text-sm font-semibold text-white shadow hover:scale-110 transition-all duration-300">
                    No Code
                </span>
            </div>
        </div>
    </div>

    <section id="about" class="container px-12 grid justify-center bg-white rounded-md aos-init aos-animate"
    data-aos="fade-in" data-aos-duration="100">
        <div class="text-slate-800">
            <div class="grid md:grid-cols-2 md:gap-10 items-center justify-center">
                <div id="about-img">
                    <img src="images/ngoding.png" alt="Logo Techomfest">
                </div>
                <div class="text-center z-10" id="about-desc">
                    <h2 class="text-3xl md:text-4xl font-bold"> Tentang Chamartin</h2>
                    <p class="py-6">
                        Chamartin adalah platform belajar coding online yang dirancang untuk siapa saja yang ingin
                        memulai perjalanan di dunia pemrograman. Dengan modul pembelajaran yang interaktif dan mentor
                        berpengalaman, kamu akan belajar bahasa pemrograman populer seperti Python, JavaScript, dan
                        React. Pelajari coding kapan saja dan di mana saja dengan fleksibilitas yang tinggi.
                        Bergabunglah dengan komunitas pembelajar yang aktif dan saling mendukung.
                    </p>
                </div>
            </div>
        </div>
    </section>

    </x-layout-navigation-welcome>
