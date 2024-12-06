<x-layout-welcome>
    <x-slot:title>{{ $title }}</x-slot>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <div class="flex flex-col items-center text-center py-20 px-8 lg:px-20">
        <h1 class="text-5xl font-bold text-[#2d3e50] leading-snug font-poppins">
            Upgrade dirimu Menjadi Developer Profesional
        </h1>
        <p class="text-gray-600 mt-6 font-montserrat">
            #BelajarBerdampak bersama Chamartin dengan tingkatkan keterampilan digital & raih karir impian kamu.
        </p>
        <a href="{{ route('login') }}"
            class="mt-6 block rounded-md px-6 py-3 font-medium text-white bg-[#2d3e50] transition hover:bg-[#1b2835] font-montserrat">
            Belajar Sekarang
        </a>
        <p class="mt-6 text-gray-700 ">
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
    <section id="testimonials" class="py-10 bg-[#f2feff] mt-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold font-poppins text-[#2d3e50]">Apa Kata Pengguna Tentang Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                @foreach ($testimonials as $testimonial)
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <img src="{{ $testimonial->photo_url }}" alt="{{ $testimonial->name }}"
                            class="w-16 h-16 rounded-full mx-auto">
                        <h3 class="mt-4 font-bold ">{{ $testimonial->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $testimonial->position }}</p>
                        <p class="mt-2 text-gray-800">{{ $testimonial->message }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="relative overflow-hidden bg-gray-100 py-4">
        <div class="absolute inset-0 bg-[#f2feff]"></div>
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
            <div id="about-img" class="floating-image">
                <img src="images/ngoding.png" alt="Logo Chamartin">
            </div>
            <div class="text-center z-10" id="about-desc">
                <h2 class="text-3xl md:text-4xl font-bold font-poppins text-[#2d3e50]"> Tentang Chamartin</h2>
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

<div class="text-center my-4 text-slate-800 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
    <h2 class="text-3xl md:text-4xl font-bold font-poppins text-[#2d3e50]">
        Common Questions About Chamartin.
    </h2>
    <p class="font-semibold text-lg">
        Yang sering ditanyakan terkait Chamartin.
    </p>
</div>
<ul class="px-2 md:px-24 py-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
    <li>
        <details class="p-2 bg-gray-100 my-3 hover:cursor-pointer rounded-md">
            <summary class="p-2 text-blue-700 font-semibold">
                Apa itu Chamartin?
            </summary>
            <p class="p-2 text-gray-700">
                Chamartin adalah platform kursus online yang berfokus pada pembelajaran web development. Kami menawarkan kursus gratis dengan modul interaktif yang dirancang untuk semua level, mulai dari pemula hingga mahir.
            </p>
        </details>
    </li>
    <li>
        <details class="p-2 bg-gray-100 my-3 hover:cursor-pointer rounded-md">
            <summary class="p-2 text-blue-700 font-semibold">
                Apakah kursus di Chamartin gratis?
            </summary>
            <p class="p-2 text-gray-700">
                Ya, semua kursus di Chamartin sepenuhnya gratis tanpa biaya apapun.
            </p>
        </details>
    </li>
    <li>
        <details class="p-2 bg-gray-100 my-3 hover:cursor-pointer rounded-md">
            <summary class="p-2 text-blue-700 font-semibold">
                Apakah peserta akan mendapatkan sertifikat?
            </summary>
            <p class="p-2 text-gray-700">
                Ya, peserta akan mendapatkan sertifikat setelah menyelesaikan kursus dan tugas akhir.
            </p>
        </details>
    </li>
    <li>
        <details class="p-2 bg-gray-100 my-3 hover:cursor-pointer rounded-md">
            <summary class="p-2 text-blue-700 font-semibold">
                Framework apa yang digunakan di Chamartin?
            </summary>
            <p class="p-2 text-gray-700">
                Website Chamartin dibangun menggunakan Laravel sebagai framework backend dan Tailwind CSS untuk styling serta menggunakan Mysql.
            </p>
        </details>
    </li>
    <li>
        <details class="p-2 bg-gray-100 my-3 hover:cursor-pointer rounded-md">
            <summary class="p-2 text-blue-700 font-semibold">
                Siapa yang bisa mengikuti kursus di Chamartin?
            </summary>
            <p class="p-2 text-gray-700">
                Semua orang dapat mengikuti kursus di Chamartin, baik pemula maupun yang ingin memperdalam pengetahuan tentang web development.
            </p>
        </details>
    </li>
    <li>
        <details class="p-2 bg-gray-100 my-3 hover:cursor-pointer rounded-md">
            <summary class="p-2 text-blue-700 font-semibold">
                Apakah Chamartin memiliki komunitas belajar?
            </summary>
            <p class="p-2 text-gray-700">
                Ya, Chamartin memiliki komunitas belajar yang aktif untuk berbagi ilmu dan saling mendukung dalam perjalanan belajar web development.
            </p>
        </details>
    </li>
</ul>


    </x-layout-navigation-welcome>

    <style>
        .floating-image {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-15px);
        }
        100% {
            transform: translateY(0);
        }
    }

    </style>
