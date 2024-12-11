<x-app-layout>
    <div class="bg-gray-800 text-white min-h-screen px-4 sm:px-6 md:px-20 py-10">
      <h1 class="text-xl sm:text-2xl md:text-3xl font-bold font-montserrat">Selamat datang Rayhan</h1>
      <p class="text-sm sm:text-base mt-2 font-poppins">semoga aktivitasmu menyenangkan</p>

      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
        <!-- Kalender -->
        <div class="bg-white rounded-lg shadow p-4 text-gray-800 col-span-1">
          <h2 class="flex items-center text-sm font-semibold mb-4">
            <span class="mr-2">📅</span> Kalender
          </h2>
          <div>
            <div class="flex justify-between items-center mb-4">
              <button id="prevMonth" class="text-blue-600 font-semibold">‹</button>
              <h3 id="monthYear" class="text-sm font-semibold"></h3>
              <button id="nextMonth" class="text-blue-600 font-semibold">›</button>
            </div>
            <table class="w-full text-center">
              <thead>
                <tr>
                  <th class="text-gray-500">SUN</th>
                  <th class="text-gray-500">MON</th>
                  <th class="text-gray-500">TUE</th>
                  <th class="text-gray-500">WED</th>
                  <th class="text-gray-500">THU</th>
                  <th class="text-gray-500">FRI</th>
                  <th class="text-gray-500">SAT</th>
                </tr>
              </thead>
              <tbody id="calendarBody"></tbody>
            </table>
          </div>
        </div>

        <!-- Berita Coding -->
        <div class="bg-white rounded-lg shadow p-4 col-span-1 md:col-span-2">
          <h2 class="flex items-center text-sm font-semibold mb-4 text-black">
            <span class="mr-2">📘</span> Berita Coding
          </h2>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
            <div class="bg-gray-100 rounded-lg overflow-hidden">
              <img src="images/berita1.png" alt="Berita 1" class="w-full h-40 sm:h-52 object-cover" />
              <p class="p-4 text-black text-xs sm:text-sm font-poppins">Coding & AI Masuk Kurikulum, Mendikdasmen: Teknologi Dukung Perkembangan Literasi-Numerasi</p>
            </div>
            <div class="bg-gray-100 rounded-lg overflow-hidden">
              <img src="images/berita1.png" alt="Berita 2" class="w-full h-40 sm:h-52 object-cover" />
              <p class="p-4 text-black text-xs sm:text-sm font-poppins">Coding & AI Masuk Kurikulum, Mendikdasmen: Teknologi Dukung Perkembangan Literasi-Numerasi</p>
            </div>
          </div>
        </div>
      </div>

      <body class="bg-gray-100 font-sans">
        <div class="max-w-4xl mx-auto p-6">
            <!-- Semua Kelas Section -->
            <h2 class="text-xl mb-4">Semua kelas</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                <!-- Kartu HTML -->
                <a href="/materi/HTML" class="bg-pink-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-pink-200">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML" class="w-16 h-16 mb-4">
                    <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                        Sertifikat
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png" alt="Verified" class="w-4 h-4">
                    </p>
                </a>
                <!-- Kartu CSS -->
                <a href="/materi/CSS" class="bg-blue-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-blue-200">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS" class="w-16 h-16 mb-4">
                    <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                        Sertifikat
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png" alt="Verified" class="w-4 h-4">
                    </p>
                </a>
                <!-- Kartu JavaScript -->
                <a href="/materi/JavaScript" class="bg-yellow-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-yellow-200">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JavaScript" class="w-16 h-16 mb-4">
                    <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                        Sertifikat
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png" alt="Verified" class="w-4 h-4">
                    </p>
                </a>
            </div>

            <!-- Akan Datang Section -->
            <h2 class="text-xl mb-4">Akan datang</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <a href="" class="bg-blue-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-blue-200">
                    <img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png" alt="CSS" class="w-16 h-16 mb-4">
                    <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                        Sertifikat
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png" alt="Verified" class="w-4 h-4">
                    </p>
                </a>


                <a href="" class="bg-pink-100 rounded-lg shadow-md flex flex-col items-center p-6 hover:bg-pink-200">
                    <img src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" alt="HTML" class="w-16 h-16 mb-4">
                    <p class="text-sm mt-2 text-gray-600 flex items-center gap-2">
                        Sertifikat
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Twitter_Verified_Badge.svg/2048px-Twitter_Verified_Badge.svg.png" alt="Verified" class="w-4 h-4">
                    </p>
                </a>
            </div>
        </div>
    </body>

      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const monthYear = document.getElementById('monthYear');
          const calendarBody = document.getElementById('calendarBody');
          const today = new Date();

          const renderCalendar = (date) => {
            const year = date.getFullYear();
            const month = date.getMonth();
            monthYear.textContent = new Intl.DateTimeFormat('en-US', { month: 'long', year: 'numeric' }).format(date);

            // Get first and last days of the month
            const firstDay = new Date(year, month, 1).getDay();
            const lastDate = new Date(year, month + 1, 0).getDate();

            // Clear previous content
            calendarBody.innerHTML = '';

            // Fill in blank spaces before the first day
            let html = '<tr>';
            for (let i = 0; i < firstDay; i++) {
              html += '<td></td>';
            }

            // Fill in the days of the month
            for (let day = 1; day <= lastDate; day++) {
              if ((firstDay + day - 1) % 7 === 0) html += '</tr><tr>';
              const isToday = day === today.getDate() && month === today.getMonth() && year === today.getFullYear();
              html += `<td class="p-2 ${isToday ? 'bg-red-500 text-white rounded-full' : ''}">${day}</td>`;
            }

            // Close remaining blank spaces
            html += '</tr>';
            calendarBody.innerHTML = html;
          };

          // Initialize calendar
          renderCalendar(today);
        });
      </script>
    </div>
  </x-app-layout>
