<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('materis')->insert([
            [
                'title' => 'HTML',
                'content' => <<<EOT
HTML adalah bahasa markup standar yang digunakan untuk membuat dan menyusun halaman web.
Bahasa ini memungkinkan Anda untuk menambahkan elemen-elemen seperti teks, gambar, video, dan tabel ke dalam sebuah halaman.
HTML adalah dasar dari setiap halaman web, dan digunakan bersama CSS dan JavaScript untuk membuat pengalaman pengguna yang dinamis.
EOT,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/800px-HTML5_logo_and_wordmark.svg.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'CSS',
                'content' => <<<EOT
CSS adalah bahasa desain yang digunakan untuk mengatur tampilan dan gaya elemen-elemen pada halaman web.
CSS memungkinkan pengembang untuk memisahkan konten dari desain, sehingga kode menjadi lebih bersih dan mudah dipelihara.
EOT,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzdOPGrhHK13DvB6p7XR8Qlw_LOfMbRuK5Bg&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'JavaScript',
                'content' => <<<EOT
JavaScript adalah bahasa pemrograman dinamis yang digunakan untuk memberikan interaktivitas pada halaman web.
JavaScript memungkinkan pengembang untuk menciptakan pengalaman pengguna yang interaktif dan dinamis.
EOT,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpuYdLEzBvwemix8pwsncUkLLOQqnByncadg&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
