<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <x-navbar-welcome></x-navbar-welcome>
    <x-main-welcome>{{ $slot }}</x-main-welcome>
    <footer class="bg-white py-10 border-t border-gray-200">
        <div class="container mx-auto px-6 lg:px-20 flex flex-col lg:flex-row justify-between">
          <!-- Kolom Kiri: Informasi Kontak -->
          <div>
            <!-- Logo dan Nama -->
            <div class="flex items-center mb-2">
                <img src="images/logo.png" alt="Chamartin Logo" class="w-10 h-auto mb-4 mr-4">
                <h1 class="text-2xl font-bold font-poppins mb-4 mr-4 text-[#2d3e50]">Chamartin</h1>
            </div>

            <!-- Lokasi -->
            <div class="mb-4">
              <p class="flex items-center text-gray-600 mb-1">
                <svg class="w-6 h-6 px-1 text-gray-800 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/>
                  </svg>

                <a href="https://maps.google.com/?q=SMK+RUS" target="_blank" class="hover:underline text-blue-600 font-medium font-poppins">SMK RUS</a>
              </p>
              <p class="text-sm text-gray-500 leading-relaxed font-poppins">
                Jalan Sukun Raya No.09, Besito Kulon,<br>Besito, Kec. Gebog, Kabupaten Kudus, Jawa Tengah 59333
              </p>
            </div>

            <!-- Email -->
            <div class="mb-4">
              <p class="flex items-center text-gray-600">
                <svg class="w-6 h-6 px-1 text-gray-800 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                  </svg>

                <a href="mailto:chamartin_course@gmail.com" target="_blank" class="hover:underline text-blue-600 font-medium font-poppins">Email</a>
              </p>
              <p class="text-sm text-gray-500 font-poppins">chamartin_course@gmail.com</p>
            </div>

            <!-- WhatsApp -->
            <div>
              <p class="flex items-center text-gray-600">
                <svg class="w-6 h-6 px-1 text-gray-800 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/><path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/></svg>
                <a href="https://wa.me/6285656596197" target="_blank" class="hover:underline text-blue-600 font-medium font-poppins">Whatsapp</a>
              </p>
              <p class="text-sm text-gray-500">+62 856-5659-6197</p>
            </div>
          </div>

          <!-- Kolom Kanan: Menu Navigasi -->
          <div class="grid grid-cols-3 gap-6 text-gray-800 text-sm">
            <div>
                <h2 class="font-semibold mb-4 mr-4 text-lg font-poppins text-[#2d3e50]">Chamartin</h2>

              <ul>
                <li class="mb-2 font-poppins"><a href="/about" class="hover:underline">About</a></li>
                <li class="mb-2 font-poppins"><a href="/faq" class="hover:underline">FAQ</a></li>
                <li class="mb-2 font-poppins"><a href="/purpose" class="hover:underline">Purpose</a></li>
              </ul>
            </div>
            <div>
              <h2 class="font-semibold mb-4 text-lg font-poppins text-[#2d3e50]">Layanan</h2>
              <ul>
                <li class="mb-2 font-poppins"><a href="/learning-path" class="hover:underline">Learning Path</a></li>
                <li class="mb-2 font-poppins"><a href="/program" class="hover:underline">Program</a></li>
                <li class="mb-2 font-poppins"><a href="/about" class="hover:underline">About</a></li>
                <li class="mb-2 font-poppins"><a href="/event" class="hover:underline">Event</a></li>
              </ul>
            </div>
            <div>
              <h2 class="font-semibold mb-4 text-lg font-poppins text-[#2d3e50]">Bantuan & Panduan</h2>
              <ul>
                <li class="mb-2 font-poppins"><a href="/terms" class="hover:underline">Syarat dan ketentuan</a></li>
                <li class="mb-2 font-poppins"><a href="/privacy-policy" class="hover:underline">Kebijakan privasi</a></li>
                <li class="mb-2 font-poppins"><a href="/help" class="hover:underline">Bantuan</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Garis pemisah -->
        <div class="border-b border-gray-200 my-6"></div>

        <!-- Copyright -->
        <div class="text-center text-sm text-[#2d3e50] font-semibold font-poppins">
          Copyright © 2024 Chamartin. All rights reserved.
        </div>
      </footer>


</body>
</html>
