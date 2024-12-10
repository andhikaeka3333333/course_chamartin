<x-app-layout>
    <title>Materi CSS</title>

    <div class="container mx-auto p-6 bg-gradient-to-b from-blue-100 to-blue-50 min-h-screen space-y-12">
        <!-- Judul Materi -->
        <div class="bg-white shadow-2xl rounded-lg p-8">
            <div class="flex items-center mb-4">
                <h1 class="text-3xl text-[#2d3e50] font-montserrat font-bold">Materi CSS</h1>
            </div>
            <p class="text-gray-700 mb-6 leading-relaxed font-poppins">
                CSS (Cascading Style Sheets) adalah bahasa yang digunakan untuk mengatur tampilan dan tata letak halaman web. Materi berikut membahas konsep dasar CSS, properti, dan contoh penggunaannya.
            </p>
        </div>

        <!-- Properti CSS -->
        <div class="bg-white shadow-2xl rounded-lg p-8 space-y-8">
            <div class="flex items-center mb-4">
                <h2 class="text-3xl text-[#2d3e50] font-montserrat font-bold">Dasar-Dasar CSS</h2>
            </div>

            <!-- Pengantar CSS -->
            <div>
                <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Apa itu CSS?</h3>
                <p class="text-gray-600 mb-4 font-poppins">CSS digunakan untuk mengatur tampilan elemen-elemen HTML pada halaman web.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
body {
    background-color: lightblue;
    font-family: Arial, sans-serif;
}
                </pre>
            </div>

            <!-- Warna Teks -->
            <div>
                <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Mengubah Warna Teks</h3>
                <p class="text-gray-600 mb-4 font-poppins">Gunakan properti <code>color</code> untuk mengubah warna teks.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
p {
    color: red; /* Teks menjadi merah */
}
                </pre>
            </div>

            <!-- Margin dan Padding -->
            <div>
                <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Mengatur Jarak</h3>
                <p class="text-gray-600 mb-4 font-poppins">Properti <code>margin</code> untuk jarak luar, dan <code>padding</code> untuk jarak dalam.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
div {
    margin: 20px;
    padding: 10px;
}
                </pre>
            </div>

            <!-- Text Align -->
            <div>
                <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Teks Rata Tengah</h3>
                <p class="text-gray-600 mb-4 font-poppins">Gunakan <code>text-align: center;</code> untuk meratakan teks secara horizontal.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
h1 {
    text-align: center;
}
                </pre>
            </div>

            <!-- z-index -->
            <div>
                <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Menggunakan z-index</h3>
                <p class="text-gray-600 mb-4 font-poppins">Properti <code>z-index</code> mengatur urutan tumpukan elemen.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
div {
    position: absolute;
    z-index: 10;
}
                </pre>
            </div>
        </div>

        <!-- Properti Lanjutan -->
        <div class="bg-white shadow-2xl rounded-lg p-8 space-y-8">
            <div class="flex items-center mb-4">
                <h2 class="text-3xl text-[#2d3e50] font-montserrat font-bold">Properti CSS Lanjutan</h2>
            </div>

            <!-- Background -->
            <div>
                <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Latar Belakang Gambar</h3>
                <p class="text-gray-600 mb-4 font-poppins">Gunakan <code>background-image</code> untuk menambahkan gambar latar.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
body {
    background-image: url('gambar.jpg');
    background-size: cover;
}
                </pre>
            </div>

            <!-- Border Radius -->
            <div>
                <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Sudut Melengkung</h3>
                <p class="text-gray-600 mb-4 font-poppins">Gunakan <code>border-radius</code> untuk membuat sudut elemen melengkung.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
div {
    border: 1px solid black;
    border-radius: 10px;
}
                </pre>
            </div>
        </div>
    </div>
</x-app-layout>
