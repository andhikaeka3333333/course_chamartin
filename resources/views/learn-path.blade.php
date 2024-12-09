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

      <!-- Gambar -->


      <div class="border-b border-gray-200 my-6"></div>

      <!-- Bagian Learning Path -->
      <section class="py-12 px-8 bg-white">
        <div class="max-w-3xl mx-auto">
          <div class="flex items-center mb-4">
            <div class="w-10 h-10 flex items-center justify-center bg-purple-500 text-white rounded-lg mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 3h4.5m-4.5 0A1.5 1.5 0 008.25 4.5v15a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5v-15a1.5 1.5 0 00-1.5-1.5m-4.5 0v1.5a1.5 1.5 0 001.5 1.5h4.5a1.5 1.5 0 001.5-1.5V3m-7.5 0v15m3-15h3" />
              </svg>
            </div>
            <h2 class="text-xl font-semibold font-poppins">Learning Path</h2>
          </div>
          <h3 class="text-2xl font-semibold mb-2">General Knowledge About Android Development</h3>
          <p class="text-gray-600 mb-6">
            Pernah nggak sih kamu bertanya-tanya, 'Kalau mau jadi Android Developer, mulai dari mana ya?' Tenang, nggak usah panik! Di sini kita bakal bahas langkah awal banget buat kamu yang mau nyemplung ke dunia Android Development. Apa aja yang perlu disiapkan, dipelajari, dan mindset yang harus ditanamkan supaya perjalananmu jadi seru dan terarah.
          </p>
          <div class="flex gap-4">
            <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Prototyping</span>
            <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">UI/UX</span>
            <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Backend Integration</span>
            <span class="px-4 py-2 bg-blue-100 text-blue-600 rounded-full text-sm font-medium">Publishing</span>
          </div>
        </div>
      </section>



      <script>
        function showContent(tab) {
          // Hide all tab contents
          document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
          });

          // Show the selected tab content
          document.getElementById(tab).classList.remove('hidden');

          // Reset all tab buttons
          document.querySelectorAll('.flex-1').forEach(tabButton => {
            tabButton.classList.remove('bg-gray-800', 'border-blue-500', 'text-blue-300');
            tabButton.classList.add('border-transparent', 'hover:border-blue-500');
          });

          // Activate the selected tab button
          const activeTab = document.getElementById(`${tab}-tab`);
          activeTab.classList.add('bg-gray-800', 'border-blue-500', 'text-white');
          activeTab.classList.remove('border-transparent');
        }
      </script>

</x-layout-welcome>

