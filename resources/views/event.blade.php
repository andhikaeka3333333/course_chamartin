<x-app-layout>
        <div class="bg-[#2d3e50] text-white py-8">
            <div class="max-w-6xl mx-auto px-6 flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold">Event Chamartin</h1>
                    <p class="text-base mt-2">Temukan berbagai event menarik di Chamartin</p>
                </div>
                {{--  <div>
                    <img src="images/event.png" alt="Calendar Icon" class="w-48 h-auto">
                </div>  --}}
            </div>
        </div>


        <section class="bg-white">
            <div class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-800 leading-tight">Ikuti Giveaway Chamartin<br>dan Menangkan Hadiah Uang Online!</h2>
                    <p class="text-gray-600 mt-4">Tunjukkan kreativitasmu! Buat video terbaik tentang pengalamanmu menggunakan website Chamartin dan raih kesempatan memenangkan hadiah uang tunai. Kompetisi ini terbuka untuk semua, jadi jangan sampai ketinggalan. Ayo, jadilah bagian dari keseruan ini!</p>
                    <button class="mt-6 px-6 py-2 bg-gray-800 text-white rounded-lg text-lg hover:bg-gray-700 transition">Ikuti Kompetisi</button>
                </div>
                <div class="flex justify-center">
                    <img src="images/money.png" alt="Money Illustration" class="w-96 h-auto">
                </div>
            </div>
        </section>

        <section class="bg-gray-100 py-16">
            <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800 leading-tight">Langkah Mudah Mengikuti Kompetisi</h2>
                    <p class="text-gray-600 mt-4">Ingin ikut serta? Ikuti langkah-langkah sederhana ini untuk menjadi bagian dari kompetisi video review Chamartin dan menangkan hadiah uang tunai.</p>
                    <ul class="mt-6 space-y-4">
                        <li class="flex items-start">
                            <span class="flex-shrink-0 bg-gray-800 text-white rounded-full h-8 w-8 flex items-center justify-center text-lg font-bold">1</span>
                            <p class="ml-4 text-gray-700">Kunjungi website Chamartin dan eksplorasi fiturnya.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 bg-gray-800 text-white rounded-full h-8 w-8 flex items-center justify-center text-lg font-bold">2</span>
                            <p class="ml-4 text-gray-700">Buat video kreatif tentang pengalamanmu menggunakan website.</p>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 bg-gray-800 text-white rounded-full h-8 w-8 flex items-center justify-center text-lg font-bold">3</span>
                            <p class="ml-4 text-gray-700">Upload video ke media sosial dengan hashtag #ChamartinReview.</p>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center">
                    <img src="images/competition.png" alt="Steps Illustration" class="rounded-lg ">
                </div>
            </div>
        </section>
</x-app-layout>
