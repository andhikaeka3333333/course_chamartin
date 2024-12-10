<x-app-layout>
    <title>{{ $title }}</title>
      <div class="container mx-auto p-6 bg-gradient-to-b from-green-100 to-green-50 min-h-screen space-y-12">
        <!-- Pengantar JavaScript -->
        <div class="bg-white shadow-2xl rounded-lg p-8">
            <div class="flex items-center mb-4">
                <h2 class="text-3xl text-[#2d3e50] font-montserrat font-bold">Pengantar JavaScript</h2>
            </div>
            <p class="text-gray-700 mb-6 leading-relaxed font-poppins">
                JavaScript adalah bahasa pemrograman yang digunakan untuk membuat halaman web lebih interaktif.
                Dengan JavaScript, Anda bisa menangani event, memanipulasi DOM, dan masih banyak lagi.
            </p>
        </div>

        <!-- Materi JavaScript -->
        <div class="bg-white shadow-2xl rounded-lg p-8">
            <div class="flex items-center mb-4">
                <h2 class="text-3xl text-[#2d3e50] font-montserrat font-bold">Materi JavaScript</h2>
            </div>
            <div class="space-y-8">
                <!-- alert() -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">alert()</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Fungsi alert() digunakan untuk menampilkan pesan peringatan dalam bentuk pop-up di browser.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
alert("Ini adalah pesan peringatan!");
                    </pre>
                </div>

                <!-- push() -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">push()</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Metode push() digunakan untuk menambahkan elemen ke akhir array.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
let arr = [1, 2, 3];
arr.push(4);
console.log(arr); // [1, 2, 3, 4]
                    </pre>
                </div>

                <!-- typeof -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">typeof</h3>
                    <p class="text-gray-600 mb-4 font-poppins">operator typeof digunakan untuk memeriksa tipe data dari suatu nilai.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
console.log(typeof "hello"); // string
                    </pre>
                </div>

                <!-- getElementById() -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">getElementById()</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Metode getElementById() digunakan untuk mengambil elemen berdasarkan ID yang diberikan.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
let element = document.getElementById("myElement");
                    </pre>
                </div>

                <!-- == vs === -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Perbandingan == dan ===</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Perbandingan == hanya memeriksa nilai, sedangkan === memeriksa nilai dan tipe data.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
console.log(5 == "5");  // true
console.log(5 === "5"); // false
                    </pre>
                </div>

                <!-- Deklarasi Variabel -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Deklarasi Variabel</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Variabel dapat dideklarasikan dengan let, const, atau var di JavaScript.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
let name = "John";
const age = 25;
var city = "New York";
                    </pre>
                </div>

                <!-- addEventListener() -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">addEventListener()</h3>
                    <p class="text-gray-600 mb-4 font-poppins">addEventListener() digunakan untuk menambahkan event pada elemen tertentu, seperti klik atau hover.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
document.getElementById("myButton").addEventListener("click", function() {
  alert("Button clicked!");
});
                    </pre>
                </div>

                <!-- Nilai undefined -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Nilai undefined</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Variabel yang belum didefinisikan akan memiliki nilai awal undefined.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
let x;
console.log(x); // undefined
                    </pre>
                </div>

                <!-- pop() -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">pop()</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Metode pop() digunakan untuk menghapus elemen terakhir dari array.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
let arr = [1, 2, 3];
arr.pop();
console.log(arr); // [1, 2]
                    </pre>
                </div>

                <!-- Boolean(0) -->
                <div>
                    <h3 class="text-xl text-gray-800 mb-2 font-montserrat font-bold">Boolean(0)</h3>
                    <p class="text-gray-600 mb-4 font-poppins">Boolean(0) akan menghasilkan false karena 0 dianggap sebagai nilai falsy dalam JavaScript.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg text-sm font-mono overflow-auto shadow-inner">
console.log(Boolean(0)); // false
                    </pre>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
