<x-app-layout>
    
    <div class="container mx-auto p-6 bg-gradient-to-b from-blue-100 to-blue-50 min-h-screen space-y-12">
        <!-- Pengantar HTML -->
        <div class="bg-white shadow-2xl rounded-lg p-8">
            <div class="flex items-center mb-4">
                <h2 class="text-3xl text-[#2d3e50] font-montserrat font-bold">Pengantar HTML</h2>
            </div>
            <p class="text-gray-700 mb-6 leading-relaxed font-poppins">
                HTML (HyperText Markup Language) adalah bahasa markup standar untuk membuat halaman web. HTML
                menggunakan elemen-elemen yang didefinisikan oleh tag untuk mengatur struktur dan konten dari halaman
                web.
            </p>
            <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Judul Halaman&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Selamat Datang&lt;/h1&gt;
    &lt;p&gt;Paragraf pertama.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
            </pre>
        </div>

        <!-- Elemen Dasar HTML -->
        <div class="bg-white shadow-2xl rounded-lg p-8">
            <div class="flex items-center mb-4">
                <h2 class="text-3xl text-[#2d3e50] font-montserrat font-bold">Elemen Dasar HTML</h2>
            </div>
            <div class="space-y-8">
                <!-- Tag <title> -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">&lt;title&gt;</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Tag ini digunakan untuk menampilkan judul halaman di tab browser.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
&lt;head&gt;
  &lt;title&gt;Belajar HTML&lt;/title&gt;
&lt;/head&gt;
                    </pre>
                </div>

                <!-- Tag <p> -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">&lt;p&gt;</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Tag ini digunakan untuk membuat paragraf teks.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
&lt;p&gt;Ini adalah paragraf pertama.&lt;/p&gt;
&lt;p&gt;Ini adalah paragraf kedua.&lt;/p&gt;
                    </pre>
                </div>

                <!-- Tag <h1> - <h6> -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">&lt;h1&gt; - &lt;h6&gt;</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Tag heading digunakan untuk membuat judul dengan ukuran yang berbeda.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
&lt;h1&gt;Heading 1&lt;/h1&gt;
&lt;h2&gt;Heading 2&lt;/h2&gt;
&lt;h3&gt;Heading 3&lt;/h3&gt;
                    </pre>
                </div>

                <!-- Tag <a> -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">&lt;a&gt;</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Tag ini digunakan untuk membuat hyperlink.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
&lt;a href="https://www.example.com" target="_blank"&gt;Kunjungi Website&lt;/a&gt;
                    </pre>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
