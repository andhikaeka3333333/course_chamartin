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
                'image' => 'https://img.icons8.com/color/48/000000/html-5--v1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'CSS',
                'content' => <<<EOT
CSS adalah bahasa desain yang digunakan untuk mengatur tampilan dan gaya elemen-elemen pada halaman web.
CSS memungkinkan pengembang untuk memisahkan konten dari desain, sehingga kode menjadi lebih bersih dan mudah dipelihara.
EOT,
                'image' => 'https://img.icons8.com/?size=100&id=7gdY5qNXaKC0&format=png&color=000000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'JavaScript',
                'content' => <<<EOT
JavaScript adalah bahasa pemrograman dinamis yang digunakan untuk memberikan interaktivitas pada halaman web.
JavaScript memungkinkan pengembang untuk menciptakan pengalaman pengguna yang interaktif dan dinamis.
EOT,
                'image' => 'https://img.icons8.com/color/48/000000/javascript--v1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
