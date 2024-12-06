<?php

namespace Database\Seeders;

use App\Models\QuestionCSS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionCSSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QuestionCSS::create([
            'question' => 'Apa kepanjangan dari CSS?',
            'options' => json_encode([
                'A' => 'Cascading Style Sheets',
                'B' => 'Computer Style Sheets',
                'C' => 'Creative Style Sheets',
                'D' => 'Colorful Style Sheets',
            ]),
            'correct_option' => 'A',
        ]);

        QuestionCSS::create([
            'question' => 'Properti CSS apa yang digunakan untuk mengubah warna teks?',
            'options' => json_encode([
                'A' => 'font-color',
                'B' => 'text-style',
                'C' => 'color',
                'D' => 'text-color',
            ]),
            'correct_option' => 'C',
        ]);

        QuestionCSS::create([
            'question' => 'Apa properti CSS yang digunakan untuk mengatur jarak antara elemen dengan tepi halaman?',
            'options' => json_encode([
                'A' => 'padding',
                'B' => 'margin',
                'C' => 'border',
                'D' => 'spacing',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionCSS::create([
            'question' => 'Bagaimana cara membuat teks rata tengah secara horizontal menggunakan CSS?',
            'options' => json_encode([
                'A' => 'text-align: center;',
                'B' => 'vertical-align: center;',
                'C' => 'align-text: middle;',
                'D' => 'justify-content: center;',
            ]),
            'correct_option' => 'A',
        ]);

        QuestionCSS::create([
            'question' => 'Apa fungsi dari properti CSS "z-index"?',
            'options' => json_encode([
                'A' => 'Mengubah ukuran elemen',
                'B' => 'Mengatur posisi elemen secara vertikal',
                'C' => 'Mengatur urutan tumpukan elemen',
                'D' => 'Menambahkan bayangan pada elemen',
            ]),
            'correct_option' => 'C',
        ]);

        QuestionCSS::create([
            'question' => 'Bagaimana cara membuat latar belakang gambar menggunakan CSS?',
            'options' => json_encode([
                'A' => 'background-color',
                'B' => 'background-image',
                'C' => 'image-background',
                'D' => 'bg-img',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionCSS::create([
            'question' => 'Properti CSS apa yang digunakan untuk mengubah ukuran font?',
            'options' => json_encode([
                'A' => 'font-size',
                'B' => 'text-size',
                'C' => 'size-font',
                'D' => 'font-style',
            ]),
            'correct_option' => 'A',
        ]);

        QuestionCSS::create([
            'question' => 'Properti CSS mana yang mengatur jarak dalam elemen?',
            'options' => json_encode([
                'A' => 'padding',
                'B' => 'margin',
                'C' => 'border',
                'D' => 'outline',
            ]),
            'correct_option' => 'A',
        ]);

        QuestionCSS::create([
            'question' => 'Bagaimana cara membuat teks tebal menggunakan CSS?',
            'options' => json_encode([
                'A' => 'font-style: bold;',
                'B' => 'font-weight: bold;',
                'C' => 'text-weight: bold;',
                'D' => 'text-bold: true;',
            ]),
            'correct_option' => 'B',
        ]);

        QuestionCSS::create([
            'question' => 'Apa fungsi dari properti CSS "border-radius"?',
            'options' => json_encode([
                'A' => 'Mengatur lebar border',
                'B' => 'Mengatur sudut border menjadi melingkar',
                'C' => 'Mengubah warna border',
                'D' => 'Menghilangkan border',
            ]),
            'correct_option' => 'B',
        ]);
    }
}
