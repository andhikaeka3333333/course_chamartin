<x-layout-welcome>
    <x-slot:title>{{ $title }}</x-slot>

    <section class="flex flex-col md:flex-row items-center max-w-7xl mx-auto px-4 py-20">
        <!-- Text Section -->
        <div class="flex-1 text-left mb-6 md:mb-0 ">
          <h1 class="text-4xl md:text-3xl font-bold text-gray-800 mb-4">
            Apa sih itu <span class="text-[#2d3e50]">Learning Path</span>?
          </h1>
          <p class="text-gray-600 text-sm md:text-base leading-relaxed">
            Learning Path adalah panduan belajar yang terstruktur untuk membantu kamu menguasai suatu bidang atau teknologi secara bertahap, mulai dari dasar hingga tingkat lanjutan. Setiap langkah dalam Learning Path dirancang untuk memberikan pemahaman yang menyeluruh dan keterampilan praktis yang dapat langsung diterapkan.
          </p>
        </div>

        <!-- Image Section -->
        <div class="flex-1 flex justify-center">
          <img src="images/learn-path.png" alt="Gambar Orang" class="size-4/5 md:size-4/5">
        </div>
      </section>


      <!-- Garis pemisah -->
      <div class="border-b border-gray-200 my-6"></div>


       <!-- Bagian Navigasi dan Konten -->
    <div class="w-full max-w-5xl mx-auto">
        <!-- Navigasi Tab -->
        <div class="flex justify-center space-x-4 mb-6">
            <button class="tab-btn px-6 py-3 font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-300" data-target="android">
                Android
            </button>
            <button class="tab-btn px-6 py-3 font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-300" data-target="web">
                Web
            </button>
            <button class="tab-btn px-6 py-3 font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-300" data-target="iot">
                IoT
            </button>
            <button class="tab-btn px-6 py-3 font-semibold text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-300" data-target="game">
                Game
            </button>
        </div>

        <!-- Konten Tab -->
        <div class="tab-contents">
            <!-- Konten Android -->
            <div id="android" class="tab-content hidden">
                <img src="images/Andro.jpg" alt="Android Development" class="w-full rounded-lg shadow-md mb-6">
                <section class="py-12 px-8 bg-white">
                    <div class="max-w-3xl mx-auto">
                      <div class="flex items-center mb-4">
                        <div class="w-10 h-10 flex items-center justify-center bg-purple-500 text-white rounded-lg mr-4">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3h4.5m-4.5 0A1.5 1.5 0 008.25 4.5v15a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5m-4.5 0v1.5a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5V3m-7.5 0v15m3-15h3" />
                          </svg>
                        </div>
                        <h2 class="text-xl font-semibold">Learning Path</h2>
                      </div>
                      <h3 class="text-2xl font-semibold mb-2">General Knowledge About Android Development</h3>
                      <p class="text-gray-600 mb-6">
                        Pernah nggak sih kamu bertanya-tanya, 'Kalau mau jadi Android Developer, mulai dari mana ya?' Tenang, nggak usah panik! Di sini kita bakal bahas langkah awal banget buat kamu yang mau nyemplung ke dunia Android Development. Apa aja yang perlu disiapkan, dipelajari, dan mindset yang harus ditanamkan supaya perjalananmu jadi seru dan terarah.
                      </p>
                      <div class="flex gap-4">
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Prototyping</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">UI/UX</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Backend</span>
                      </div>
                    </div>

                    <div class="max-w-3xl mx-auto p-6">


                        <!-- Garis -->
                        <div class="border-t border-gray-200 mb-6"></div>

                        <!-- Card 1 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/java-coffee-cup-logo.png" alt="Java" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Belajar Java Zero to Hero 100%</h2>
                                <p class="text-sm text-gray-600 mb-4 ">
                                    Di sini kita bakal belajar sampai benar-benar paham dan bisa. Mulai dari dasar-dasar seperti sintaks, konsep OOP, sampai hal-hal yang lebih kompleks. Semua materinya dirancang bertahap supaya gampang dipahami, jadi nggak perlu takut kalau baru mulai.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 2 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-green-700 bg-green-100 px-3 py-1 rounded-lg">Mudah</span>
                        </div>

                        <!-- Card 2 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/android-os.png" alt="Android" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Mempelajari Android Native</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Setelah memahami dasar-dasar Java, saatnya melangkah lebih jauh dengan belajar Android Native! Di sini, kamu akan mempelajari komponen utama Android, seperti Activity, Fragment, dan XML untuk desain antarmuka.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 3 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-green-700 bg-green-100 px-3 py-1 rounded-lg">Normal</span>
                        </div>

                        <!-- Card 3 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/flutter.png" alt="Flutter" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Mengenal Framework Flutter</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Setelah memahami Android Native, kini saatnya kita masuk ke dunia Flutter! Flutter adalah framework modern yang memungkinkan kamu membuat aplikasi untuk berbagai platform, seperti Android, iOS, hingga web.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 5 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-yellow-700 bg-yellow-100 px-3 py-1 rounded-lg">Medium</span>
                        </div>

                        <!-- Card 4 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/mysql-logo.png" alt="MySQL" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Backend MySQL</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Sekarang saatnya mempelajari pemahaman tentang backend untuk aplikasi. Di sini, kamu akan belajar cara membangun aplikasi Flutter dengan menggunakan API, mengelola database, dan mengimplementasikan autentikasi.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 3 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-red-700 bg-red-100 px-3 py-1 rounded-lg">Hard</span>
                        </div>

                        <!-- Card 5 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/flutter.png" alt="Flutter" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Testing and Publishing</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Setelah memahami Android Native, kini saatnya kita masuk ke dunia Flutter! Flutter adalah framework modern yang memungkinkan kamu membuat aplikasi untuk berbagai platform, seperti Android, iOS, hingga web.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 5 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-yellow-700 bg-yellow-100 px-3 py-1 rounded-lg">Medium</span>
                        </div>
                  </section>
            </div>

        <!-- Konten Tab -->
        <div class="tab-contents">
            <!-- Konten Website -->
            <div id="web" class="tab-content hidden">
                <img src="images/Web.jpg" alt="Website Development" class="w-full rounded-lg shadow-md mb-6">
                <section class="py-12 px-8 bg-white">
                    <div class="max-w-3xl mx-auto">
                      <div class="flex items-center mb-4">
                        <div class="w-10 h-10 flex items-center justify-center bg-purple-500 text-white rounded-lg mr-4">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3h4.5m-4.5 0A1.5 1.5 0 008.25 4.5v15a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5m-4.5 0v1.5a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5V3m-7.5 0v15m3-15h3" />
                          </svg>
                        </div>
                        <h2 class="text-xl font-semibold">Learning Path</h2>
                      </div>
                      <h3 class="text-2xl font-semibold mb-2">General Knowledge About Website Development</h3>
                      <p class="text-gray-600 mb-6">
                        Pernah nggak sih kamu bertanya-tanya, 'Kalau mau jadi Web Developer, mulai dari mana ya?' Tenang, nggak usah panik! Di sini kita bakal bahas langkah awal banget buat kamu yang mau nyemplung ke dunia Web Development. Apa aja yang perlu disiapkan, dipelajari, dan mindset yang harus ditanamkan supaya perjalananmu jadi seru dan terarah.
                      </p>
                      <div class="flex gap-4">
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Prototyping</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">UI/UX</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Backend Integration</span>
                        <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Hosting</span>
                      </div>
                    </div>

                    <div class="max-w-3xl mx-auto p-6">


                        <!-- Garis -->
                        <div class="border-t border-gray-200 mb-6"></div>

                        <!-- Card 1 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/html-5--v1.png" alt="HTML" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Belajar Dasar HTML dan CSS</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Mulailah perjalananmu di dunia pengembangan web dengan memahami dasar-dasar HTML dan CSS. Materi ini mencakup elemen HTML, styling menggunakan CSS, serta membuat halaman web yang responsif dan menarik.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 3 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-green-700 bg-green-100 px-3 py-1 rounded-lg">Mudah</span>
                        </div>

                        <!-- Card 2 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/javascript--v1.png" alt="JavaScript" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Fundamental JavaScript</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Pelajari konsep dasar JavaScript untuk membuat halaman web lebih dinamis. Fokus pada variabel, fungsi, manipulasi DOM, dan event handling untuk meningkatkan interaktivitas.                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 1.5 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-green-700 bg-green-100 px-3 py-1 rounded-lg">Normal</span>
                        </div>

                        <!-- Card 3 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/react-native.png" alt="React" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Memahami React</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Setelah menguasai JavaScript, pelajari React untuk membangun antarmuka pengguna yang modern. Fokus pada komponen, props, state, dan pengelolaan data dengan hook.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 2 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-yellow-700 bg-yellow-100 px-3 py-1 rounded-lg">Medium</span>
                        </div>

                        <!-- Card 4 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/nodejs.png" alt="Node.js" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Membangun Backend dengan Node.js</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Masuk ke dunia backend dengan mempelajari Node.js. Pelajari cara membuat server, menggunakan Express.js, dan mengintegrasikan database untuk aplikasi web yang kuat.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 3 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-red-700 bg-red-100 px-3 py-1 rounded-lg">Sulit</span>
                        </div>

                        <!-- Card 5 -->
                        <div class="flex items-start bg-white shadow-md rounded-lg p-6">
                            <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                                <img src="https://img.icons8.com/color/48/000000/api-settings.png" alt="API" class="w-6 h-6">
                            </div>
                            <div class="flex-1">
                                <h2 class="text-lg font-semibold text-gray-800 mb-2">Menguji dan Mendeploy Aplikasi</h2>
                                <p class="text-sm text-gray-600 mb-4">
                                    Pelajari cara menguji aplikasi menggunakan Jest atau Mocha serta proses deployment ke platform seperti Vercel atau Heroku agar proyekmu bisa diakses oleh pengguna.
                                </p>
                                <div class="flex items-center text-gray-500 text-sm">
                                    <span class="mr-4">📅 Estimasi waktu 2 bulan</span>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-yellow-700 bg-yellow-100 px-3 py-1 rounded-lg">Medium</span>
                        </div>
                  </section>
            </div>

        <!-- Konten Tab -->
        <div class="tab-contents">
        <div id="iot" class="tab-content hidden">
        <img src="images/iot.jpg" alt="IoT Development" class="w-full rounded-lg shadow-md mb-6">
        <section class="py-12 px-8 bg-white">
            <div class="max-w-3xl mx-auto">
              <div class="flex items-center mb-4">
                <div class="w-10 h-10 flex items-center justify-center bg-purple-500 text-white rounded-lg mr-4">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3h4.5m-4.5 0A1.5 1.5 0 008.25 4.5v15a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5m-4.5 0v1.5a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5V3m-7.5 0v15m3-15h3" />
                  </svg>
                </div>
                <h2 class="text-xl font-semibold">Learning Path</h2>
              </div>
              <h3 class="text-2xl font-semibold mb-2">General Knowledge About IoT Development</h3>
              <p class="text-gray-600 mb-6">
                Pernah nggak sih kamu bertanya-tanya, 'Kalau mau jadi IoT Developer, mulai dari mana ya?' Tenang, nggak usah panik! Di sini kita bakal bahas langkah awal banget buat kamu yang mau nyemplung ke dunia IoT Development. Apa aja yang perlu disiapkan, dipelajari, dan mindset yang harus ditanamkan supaya perjalananmu jadi seru dan terarah.
              </p>
              <div class="flex gap-4">
                <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Prototyping</span>
                <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Hardware</span>
                <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Networking</span>
              </div>
            </div>

            <div class="max-w-3xl mx-auto p-6">

                <!-- Garis -->
                <div class="border-t border-gray-200 mb-6"></div>

                <!-- Card 1 -->
                <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                    <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                        <img src="https://img.icons8.com/color/48/000000/raspberry-pi.png" alt="Raspberry Pi" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Belajar Dasar IoT dengan Raspberry Pi</h2>
                        <p class="text-sm text-gray-600 mb-4">
                            Di sini kita mulai belajar dasar-dasar IoT menggunakan Raspberry Pi, platform yang sangat populer untuk membuat berbagai perangkat IoT. Kamu akan belajar tentang sensor, aktuator, dan cara menghubungkan perangkat-perangkat ini untuk membuat sistem yang bisa berinteraksi dengan dunia nyata.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm">
                            <span class="mr-4">📅 Estimasi waktu 2 bulan</span>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-green-700 bg-green-100 px-3 py-1 rounded-lg">Mudah</span>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                    <div class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-full mr-4">
                        <img src="https://img.icons8.com/color/48/000000/arduino.png" alt="Arduino" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Mempelajari Arduino untuk IoT</h2>
                        <p class="text-sm text-gray-600 mb-4">
                            Setelah memahami dasar Raspberry Pi, kamu bisa lanjut dengan belajar Arduino, platform lain yang juga sangat populer di dunia IoT. Di sini, kamu akan belajar tentang pemrograman dan penggunaan sensor serta aktuator dengan Arduino untuk menciptakan proyek IoT.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm">
                            <span class="mr-4">📅 Estimasi waktu 3 bulan</span>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-green-700 bg-green-100 px-3 py-1 rounded-lg">Normal</span>
                </div>

                <!-- Card 3 -->
                <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                    <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                        <img src="https://img.icons8.com/color/48/000000/nodejs.png" alt="Node.js" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Belajar Node.js untuk IoT Backend</h2>
                        <p class="text-sm text-gray-600 mb-4">
                            Setelah menguasai perangkat keras, sekarang saatnya kamu belajar bagaimana menghubungkan perangkat IoT dengan backend. Di sini, kita akan menggunakan Node.js untuk membangun server dan API yang bisa mengelola data dari perangkat IoT.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm">
                            <span class="mr-4">📅 Estimasi waktu 4 bulan</span>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-yellow-700 bg-yellow-100 px-3 py-1 rounded-lg">Medium</span>
                </div>

                <!-- Card 4 -->
                <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                    <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-full mr-4">
                        <img src="https://img.icons8.com/color/48/000000/mysql-logo.png" alt="MySQL" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Mengenal Database MySQL untuk IoT</h2>
                        <p class="text-sm text-gray-600 mb-4">
                            Sekarang, kamu akan belajar untuk menyimpan dan mengelola data yang dikumpulkan oleh perangkat IoT. Di sini, kita akan menggunakan MySQL untuk menyimpan data sensor dan mengatur data dalam database yang mudah diakses oleh aplikasi.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm">
                            <span class="mr-4">📅 Estimasi waktu 3 bulan</span>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-red-700 bg-red-100 px-3 py-1 rounded-lg">Hard</span>
                </div>

                <!-- Card 5 -->
                <div class="flex items-start bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                        <img src="images/azure.png" alt="Azure" class="w-6 h-6">
                    </div>
                    <div class="flex-1">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">Cloud IoT with Azure</h2>
                        <p class="text-sm text-gray-600 mb-4">
                            Untuk membangun aplikasi IoT skala besar, kamu perlu memahami integrasi cloud. Di sini, kita akan belajar bagaimana menghubungkan perangkat IoT ke platform cloud seperti Microsoft Azure untuk memproses dan menganalisis data secara real-time.
                        </p>
                        <div class="flex items-center text-gray-500 text-sm">
                            <span class="mr-4">📅 Estimasi waktu 4 bulan</span>
                        </div>
                    </div>
                    <span class="text-sm font-medium text-yellow-700 bg-yellow-100 px-3 py-1 rounded-lg">Medium</span>
                </div>
          </section>
        </div>
    </div>

    <div class="tab-contents">
        <!-- Konten Game -->
        <div id="game" class="tab-content hidden">
            <img src="images/Game.jpg" alt="Game Development" class="w-full rounded-lg shadow-md mb-6">
            <section class="py-12 px-8 bg-white">
                <div class="max-w-3xl mx-auto">
                  <div class="flex items-center mb-4">
                    <div class="w-10 h-10 flex items-center justify-center bg-purple-500 text-white rounded-lg mr-4">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3h4.5m-4.5 0A1.5 1.5 0 008.25 4.5v15a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5m-4.5 0v1.5a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5V3m-7.5 0v15m3-15h3" />
                      </svg>
                    </div>
                    <h2 class="text-xl font-semibold ">Learning Path</h2>
                  </div>
                  <h3 class="text-2xl font-semibold mb-2">General Knowledge About Game Development</h3>
                  <p class="text-gray-600 mb-6">
                    Pernah nggak sih kamu bertanya-tanya, 'Kalau mau jadi Game Developer, mulai dari mana ya?' Tenang, nggak usah panik! Di sini kita bakal bahas langkah awal banget buat kamu yang mau nyemplung ke dunia Game Development. Apa aja yang perlu disiapkan, dipelajari, dan mindset yang harus ditanamkan supaya perjalananmu jadi seru dan terarah.
                  </p>
                  <div class="flex gap-4">
                    <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Design</span>
                    <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Programming</span>
                    <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Storytelling</span>
                  </div>
                </div>

                <div class="max-w-3xl mx-auto p-6">

                    <!-- Garis -->
                    <div class="border-t border-gray-200 mb-6"></div>

                    <!-- Card 1 -->
                    <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                            <img src="https://img.icons8.com/color/48/000000/unity.png" alt="Unity" class="w-6 h-6">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Belajar Dasar Game Development dengan Unity</h2>
                            <p class="text-sm text-gray-600 mb-4">
                                Unity adalah salah satu engine paling populer untuk membuat game. Di sini kamu akan belajar dasar-dasar penggunaan Unity, termasuk membuat karakter, lingkungan, dan mekanisme permainan sederhana.
                            </p>
                            <div class="flex items-center text-gray-500 text-sm">
                                <span class="mr-4">📅 Estimasi waktu 3 bulan</span>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-green-700 bg-green-100 px-3 py-1 rounded-lg">Mudah</span>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                        <div class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-full mr-4">
                            <img src="https://img.icons8.com/color/48/000000/blender-3d.png" alt="Blender" class="w-6 h-6">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Mempelajari Blender untuk Model 3D</h2>
                            <p class="text-sm text-gray-600 mb-4">
                                Setelah memahami dasar pembuatan game, kamu bisa memperdalam keterampilan dengan belajar membuat model 3D menggunakan Blender. Model ini bisa digunakan untuk karakter, objek, atau lingkungan dalam game.
                            </p>
                            <div class="flex items-center text-gray-500 text-sm">
                                <span class="mr-4">📅 Estimasi waktu 4 bulan</span>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-green-700 bg-green-100 px-3 py-1 rounded-lg">Normal</span>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                            <img src="https://img.icons8.com/color/48/000000/c-sharp-logo-2.png" alt="C#" class="w-6 h-6">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Belajar C# untuk Scripting</h2>
                            <p class="text-sm text-gray-600 mb-4">
                                Scripting adalah bagian penting dalam pengembangan game. Dengan belajar C#, kamu bisa membuat logika game yang kompleks seperti AI, kontrol karakter, dan sistem inventaris.
                            </p>
                            <div class="flex items-center text-gray-500 text-sm">
                                <span class="mr-4">📅 Estimasi waktu 3 bulan</span>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-yellow-700 bg-yellow-100 px-3 py-1 rounded-lg">Medium</span>
                    </div>

                    <!-- Card 4 -->
                    <div class="flex items-start bg-white shadow-md rounded-lg p-6 mb-6">
                        <div class="flex items-center justify-center w-10 h-10 bg-red-100 rounded-full mr-4">
                            <img src="https://img.icons8.com/color/48/000000/adobe-photoshop.png" alt="Photoshop" class="w-6 h-6">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Menguasai Photoshop untuk Game Assets</h2>
                            <p class="text-sm text-gray-600 mb-4">
                                Untuk mempercantik game, kamu perlu belajar desain 2D untuk membuat texture, icon, atau interface game. Photoshop adalah alat yang sangat berguna untuk kebutuhan ini.
                            </p>
                            <div class="flex items-center text-gray-500 text-sm">
                                <span class="mr-4">📅 Estimasi waktu 2 bulan</span>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-red-700 bg-red-100 px-3 py-1 rounded-lg">Hard</span>
                    </div>

                    <!-- Card 5 -->
                    <div class="flex items-start bg-white shadow-md rounded-lg p-6">
                        <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full mr-4">
                            <img src="https://img.icons8.com/color/48/000000/unreal-engine.png" alt="Unreal Engine" class="w-6 h-6">
                        </div>
                        <div class="flex-1">
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Memanfaatkan Unreal Engine untuk Grafik Tingkat Tinggi</h2>
                            <p class="text-sm text-gray-600 mb-4">
                                Unreal Engine adalah pilihan terbaik jika kamu ingin membuat game dengan kualitas grafik tinggi. Di sini, kamu akan belajar fitur-fitur unggulan Unreal Engine seperti Blueprints dan real-time rendering.
                            </p>
                            <div class="flex items-center text-gray-500 text-sm">
                                <span class="mr-4">📅 Estimasi waktu 5 bulan</span>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-yellow-700 bg-yellow-100 px-3 py-1 rounded-lg">Medium</span>
                    </div>
              </section>
        </div>
    </div>

        </div>
    </div>






    <!-- Script untuk Navigasi -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const buttons = document.querySelectorAll(".tab-btn");
            const contents = document.querySelectorAll(".tab-content");

            buttons.forEach((button) => {
                button.addEventListener("click", () => {
                    // Sembunyikan semua konten
                    contents.forEach(content => content.classList.add("hidden"));
                    buttons.forEach(btn => btn.classList.remove("bg-gray-300", "text-black"));

                    // Tampilkan konten yang dipilih
                    const target = button.getAttribute("data-target");
                    document.getElementById(target).classList.remove("hidden");

                    // Ganti tampilan tombol aktif
                    button.classList.add("bg-gray-300", "text-black");
                });
            });

            // Default: Pilih tab pertama
            buttons[0].click();
        });
    </script>


</x-layout-welcome>

