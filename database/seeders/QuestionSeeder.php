<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Soal tentang HTML
        Question::create([
            'question' => 'Apa fungsi tag <title> dalam HTML?',
            'options' => json_encode([
                'A' => 'Untuk mendefinisikan judul utama pada halaman web',
                'B' => 'Untuk menampilkan judul halaman web di tab browser',
                'C' => 'Untuk membuat hyperlink',
                'D' => 'Untuk menambahkan metadata ke halaman web',
            ]),
            'correct_option' => 'B',
        ]);

        Question::create([
            'question' => 'Tag apa yang digunakan untuk membuat paragraf dalam HTML?',
            'options' => json_encode([
                'A' => '<h1>',
                'B' => '<div>',
                'C' => '<p>',
                'D' => '<span>',
            ]),
            'correct_option' => 'C',
        ]);

        Question::create([
            'question' => 'Tag HTML apa yang digunakan untuk membuat link?',
            'options' => json_encode([
                'A' => '<link>',
                'B' => '<a>',
                'C' => '<href>',
                'D' => '<url>',
            ]),
            'correct_option' => 'B',
        ]);

        Question::create([
            'question' => 'Apa itu atribut alt dalam tag <img>?',
            'options' => json_encode([
                'A' => 'Untuk mendefinisikan ukuran gambar',
                'B' => 'Untuk memberikan deskripsi gambar jika gambar tidak ditampilkan',
                'C' => 'Untuk menambahkan border pada gambar',
                'D' => 'Untuk memberikan warna latar belakang gambar',
            ]),
            'correct_option' => 'B',
        ]);

        // Soal tentang CSS
        Question::create([
            'question' => 'Apa kepanjangan dari CSS?',
            'options' => json_encode([
                'A' => 'Cascading Style Sheets',
                'B' => 'Computer Style Sheets',
                'C' => 'Creative Style Sheets',
                'D' => 'Colorful Style Sheets',
            ]),
            'correct_option' => 'A',
        ]);

        Question::create([
            'question' => 'Properti CSS apa yang digunakan untuk mengubah warna teks?',
            'options' => json_encode([
                'A' => 'font-color',
                'B' => 'text-style',
                'C' => 'color',
                'D' => 'text-color',
            ]),
            'correct_option' => 'C',
        ]);

        Question::create([
            'question' => 'Apa properti CSS yang digunakan untuk mengatur jarak antara elemen dengan tepi halaman?',
            'options' => json_encode([
                'A' => 'padding',
                'B' => 'margin',
                'C' => 'border',
                'D' => 'spacing',
            ]),
            'correct_option' => 'B',
        ]);

        Question::create([
            'question' => 'Bagaimana cara membuat teks rata tengah secara horizontal menggunakan CSS?',
            'options' => json_encode([
                'A' => 'text-align: center;',
                'B' => 'vertical-align: center;',
                'C' => 'align-text: middle;',
                'D' => 'justify-content: center;',
            ]),
            'correct_option' => 'A',
        ]);

        // Soal tentang JavaScript
        Question::create([
            'question' => 'Apa fungsi dari fungsi `alert()` dalam JavaScript?',
            'options' => json_encode([
                'A' => 'Menampilkan pesan peringatan dalam bentuk pop-up',
                'B' => 'Menghapus elemen pada halaman',
                'C' => 'Mengirim data ke server',
                'D' => 'Mengganti konten elemen HTML',
            ]),
            'correct_option' => 'A',
        ]);

        Question::create([
            'question' => 'Metode JavaScript mana yang digunakan untuk menambahkan elemen ke akhir array?',
            'options' => json_encode([
                'A' => 'push()',
                'B' => 'pop()',
                'C' => 'shift()',
                'D' => 'unshift()',
            ]),
            'correct_option' => 'A',
        ]);
    }
}
