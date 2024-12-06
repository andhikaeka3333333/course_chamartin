<?php

namespace Database\Seeders;

use App\Models\QuestionHTML;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionHTMLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionHTML::create([
            'question' => 'Apa fungsi tag <title> dalam HTML?',
            'options' => json_encode([
                'A' => 'Untuk mendefinisikan judul utama pada halaman web',
                'B' => 'Untuk menampilkan judul halaman web di tab browser',
                'C' => 'Untuk membuat hyperlink',
                'D' => 'Untuk menambahkan metadata ke halaman web',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionHTML::create([
            'question' => 'Tag apa yang digunakan untuk membuat paragraf dalam HTML?',
            'options' => json_encode([
                'A' => '<h1>',
                'B' => '<div>',
                'C' => '<p>',
                'D' => '<span>',
            ]),
            'correct_option' => 'C',
        ]);

        QuestionHTML::create([
            'question' => 'Tag HTML apa yang digunakan untuk membuat link?',
            'options' => json_encode([
                'A' => '<link>',
                'B' => '<a>',
                'C' => '<href>',
                'D' => '<url>',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionHTML::create([
            'question' => 'Apa itu atribut alt dalam tag <img>?',
            'options' => json_encode([
                'A' => 'Untuk mendefinisikan ukuran gambar',
                'B' => 'Untuk memberikan deskripsi gambar jika gambar tidak ditampilkan',
                'C' => 'Untuk menambahkan border pada gambar',
                'D' => 'Untuk memberikan warna latar belakang gambar',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionHTML::create([
            'question' => 'Tag apa yang digunakan untuk membuat tabel dalam HTML?',
            'options' => json_encode([
                'A' => '<table>',
                'B' => '<tr>',
                'C' => '<td>',
                'D' => '<tab>',
            ]),
            'correct_option' => 'A',
        ]);

        QuestionHTML::create([
            'question' => 'Atribut apa yang digunakan untuk memberikan ID unik pada elemen HTML?',
            'options' => json_encode([
                'A' => 'class',
                'B' => 'id',
                'C' => 'name',
                'D' => 'type',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionHTML::create([
            'question' => 'Apa fungsi tag <br> dalam HTML?',
            'options' => json_encode([
                'A' => 'Untuk memisahkan paragraf',
                'B' => 'Untuk membuat baris baru',
                'C' => 'Untuk menambahkan garis horizontal',
                'D' => 'Untuk menambahkan jeda waktu',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionHTML::create([
            'question' => 'Tag HTML apa yang digunakan untuk membuat daftar tidak berurutan?',
            'options' => json_encode([
                'A' => '<ul>',
                'B' => '<ol>',
                'C' => '<li>',
                'D' => '<list>',
            ]),
            'correct_option' => 'A',
        ]);

        QuestionHTML::create([
            'question' => 'Apa fungsi atribut href dalam tag <a>?',
            'options' => json_encode([
                'A' => 'Untuk mendefinisikan teks hyperlink',
                'B' => 'Untuk menentukan URL tujuan hyperlink',
                'C' => 'Untuk mengatur warna hyperlink',
                'D' => 'Untuk menambahkan tooltip pada hyperlink',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionHTML::create([
            'question' => 'Tag HTML apa yang digunakan untuk menampilkan gambar?',
            'options' => json_encode([
                'A' => '<img>',
                'B' => '<picture>',
                'C' => '<image>',
                'D' => '<src>',
            ]),
            'correct_option' => 'A',
        ]);
    }
}
