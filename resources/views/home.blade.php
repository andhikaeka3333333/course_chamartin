<x-app-layout>
    <div class="bg-[#2d3e50] text-white py-8">
        <div class="max-w-6xl mx-auto px-6 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold">Selamat datang, {{ auth()->user()->name }}</h1>
                <p class="text-base mt-2">Semoga aktivitas belajarmu menyenangkan</p>
            </div>
        </div>
    </div>
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Card Gabungan -->
            <div class="bg-[#2d3e50] text-gray-100 rounded-lg p-6 shadow-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Kalender -->
                    <div class="bg-white text-[#2d3e50] p-6 rounded-lg shadow-md">
                        <div class="flex justify-between items-center border-b pb-3 mb-3">
                            <h2 class="text-lg font-semibold flex items-center">
                                <svg class="w-6 h-6 text-[#2d3e50] mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 5V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h3V4a1 1 0 1 1 2 0v1h1a2 2 0 0 1 2 2v2H3V7a2 2 0 0 1 2-2h1ZM3 19v-8h18v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm5-6a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8Z" clip-rule="evenodd" />
                                </svg>
                                Kalender
                            </h2>
                            <div class="flex space-x-2">
                                <button id="prevMonth" class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <button id="nextMonth" class="text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3 id="calendarMonth" class="font-semibold text-[#2d3e50]"></h3>
                            <div id="calendarGrid" class="grid grid-cols-7 gap-2 mt-4 text-sm"></div>
                        </div>
                    </div>

                    <!-- Berita Coding -->
                    <div>
                        <h2 class="text-lg font-semibold mb-4  flex items-center text-white">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z" clip-rule="evenodd" />
                            </svg>
                            Berita Coding
                        </h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Card Berita 1 -->
                            <div class="bg-white rounded-lg p-4 shadow-md">
                                <img src="images/berita1.png" alt="Berita 1" class="rounded-md">
                                <h3 class="text-[#2d3e50] font-medium text-lg mt-4">Coding & AI Masuk Kurikulum</h3>
                                <p class="text-gray-600 text-sm mt-2">Mendikdasmen: Teknologi Dukung Perkembangan Literasi-Numerasi</p>
                            </div>
                            <!-- Card Berita 2 -->
                            <div class="bg-white rounded-lg p-4 shadow-md">
                                <img src="images/berita5.png" alt="Berita 2" class="rounded-md">
                                <h3 class=" text-[#2d3e50] font-medium text-lg mt-4">Variasi Pembelajaran Coding</h3>
                                <p class="text-gray-600 text-sm mt-2">Mendikdasmen Jelaskan Ada Opsi Tanpa Internet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="max-w-4xl mx-auto p-6">
        <!-- Semua Kelas Section -->
        <h2 class="text-xl mb-4">Semua kelas</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            <!-- Kartu HTML -->
            <a href="/materi/HTML"
                class="bg-pink-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-pink-200">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg"
                    alt="HTML" class="w-16 h-16 mb-4">
                <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                    Sertifikat
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png"
                        alt="Verified" class="w-4 h-4">
                </p>
            </a>
            <!-- Kartu CSS -->
            <a href="/materi/CSS"
                class="bg-blue-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-blue-200">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS"
                    class="w-16 h-16 mb-4">
                <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                    Sertifikat
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png"
                        alt="Verified" class="w-4 h-4">
                </p>
            </a>
            <!-- Kartu JavaScript -->
            <a href="/materi/JavaScript"
                class="bg-yellow-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-yellow-200">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JavaScript"
                    class="w-16 h-16 mb-4">
                <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                    Sertifikat
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png"
                        alt="Verified" class="w-4 h-4">
                </p>
            </a>
        </div>

        <!-- Akan Datang Section -->
        <h2 class="text-xl mb-4">Akan datang</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <a href=""
                class="bg-blue-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-blue-200">
                <img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png" alt="CSS"
                    class="w-16 h-16 mb-4">
                <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                    Sertifikat
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png"
                        alt="Verified" class="w-4 h-4">
                </p>
            </a>


            <a href=""
                class="bg-pink-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-pink-200">
                <img src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="HTML"
                    class="w-16 h-16 mb-4">
                <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                    Sertifikat
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png"
                        alt="Verified" class="w-4 h-4">
                </p>
            </a>
        </div>
    </div>

    <script>
        // Kalender Interaktif
        const calendarMonth = document.getElementById('calendarMonth');
        const calendarGrid = document.getElementById('calendarGrid');
        const prevMonthBtn = document.getElementById('prevMonth');
        const nextMonthBtn = document.getElementById('nextMonth');

        let currentMonth = dayjs();

        function renderCalendar() {
            // Set Month Name
            calendarMonth.textContent = currentMonth.format('MMMM YYYY');

            // Clear Grid
            calendarGrid.innerHTML = '';

            // Get Start and End Dates
            const startOfMonth = currentMonth.startOf('month').day();
            const daysInMonth = currentMonth.daysInMonth();

            // Populate Days
            for (let i = 0; i < startOfMonth; i++) {
                const blankDay = document.createElement('span');
                calendarGrid.appendChild(blankDay);
            }
            for (let day = 1; day <= daysInMonth; day++) {
                const dateElement = document.createElement('span');
                dateElement.textContent = day;
                dateElement.className =
                'flex justify-center items-center w-8 h-8 rounded-full hover:bg-gray-300 transition';
                if (day === dayjs().date() && currentMonth.isSame(dayjs(), 'month')) {
                    dateElement.classList.add('bg-red-500', 'text-white');
                }
                calendarGrid.appendChild(dateElement);
            }
        }

        prevMonthBtn.addEventListener('click', () => {
            currentMonth = currentMonth.subtract(1, 'month');
            renderCalendar();
        });

        nextMonthBtn.addEventListener('click', () => {
            currentMonth = currentMonth.add(1, 'month');
            renderCalendar();
        });

        renderCalendar();
    </script>
    </div>
</x-app-layout>
