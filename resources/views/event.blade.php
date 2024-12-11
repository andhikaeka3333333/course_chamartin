<x-app-layout>
    <title>{{ $title }}</title>
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Event Giveaway Chamartin</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 font-sans">
        <!-- Bagian Header -->

        <!-- Bagian Hero -->
        <section class="bg-blue-500 text-white py-16 text-center">
            <div class="container mx-auto px-4">
                <img src="images/logo.png" alt="Hadiah 1" class="mx-auto mb-1 w-20">
                <h2 class="text-4xl font-bold">Ikuti Giveaway Kami!</h2>
                <p class="mt-4 text-lg">Unggah video review tentang Chamartin ke media sosial dan tag <strong>@Chamartin</strong> untuk
                    memenangkan hadiah menarik!</p>
            </div>
        </section>

        <!-- Bagian Cara Ikut -->
        <section id="how-to" class="py-16 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800">Mau Ikutan? Gimana Caranya?</h2>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white shadow-lg p-6 rounded transform hover:scale-105 transition-transform duration-300">
                        <div class="flex justify-center mb-4">
                            <span class="text-blue-500 text-3xl">🎥</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700">1. Buat Video Kamu</h3>
                        <p class="mt-4 text-gray-600">Rekam ulasan kreatif dan jujur tentang produk Chamartin.</p>
                    </div>
                    <div class="bg-white shadow-lg p-6 rounded transform hover:scale-105 transition-transform duration-300">
                        <div class="flex justify-center mb-4">
                            <span class="text-blue-500 text-3xl">📲</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700">2. Unggah ke Media Sosial</h3>
                        <p class="mt-4 text-gray-600">Posting video kamu di Instagram, TikTok, atau YouTube.</p>
                    </div>
                    <div class="bg-white shadow-lg p-6 rounded transform hover:scale-105 transition-transform duration-300">
                        <div class="flex justify-center mb-4">
                            <span class="text-blue-500 text-3xl">🏷</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-700">3. Tag dan Follow Kami</h3>
                        <p class="mt-4 text-gray-600">Tag @Chamartin dan sertakan hashtag kami #ChamartinGiveaway.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Hadiah -->
        <section id="prizes" class="py-16 bg-blue-50">
            <div class="container mx-auto px-4">
                <div class="bg-white shadow-lg p-6 rounded text-center">
                    <img src="https://storage.googleapis.com/flip-prod-mktg-strapi/media-library/apa_saja_yang_termasuk_e_wallet_eec27cb6bd/apa_saja_yang_termasuk_e_wallet_eec27cb6bd.png" alt="Hadiah 1" class="mx-auto mb-4 w-1/2">
                    <h3 class="text-xl font-semibold text-gray-700">Hadiah 🎁</h3>
                    <p class="mt-2 text-gray-600">E-Wallet senilai Rp 10.000 untuk 3 orang</p>
                </div>
            </div>
        </section>
    </body>
</x-app-layout>
