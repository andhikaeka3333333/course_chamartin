<?php

namespace Database\Seeders;

use App\Models\Questionjs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionJSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Questionjs::create([
            'question' => 'Apa fungsi dari fungsi `alert()` dalam JavaScript?',
            'options' => json_encode([
                'A' => 'Menampilkan pesan peringatan dalam bentuk pop-up',
                'B' => 'Menghapus elemen pada halaman',
                'C' => 'Mengirim data ke server',
                'D' => 'Mengganti konten elemen HTML',
            ]),
            'correct_option' => 'A',
        ]);

        Questionjs::create([
            'question' => 'Metode JavaScript mana yang digunakan untuk menambahkan elemen ke akhir array?',
            'options' => json_encode([
                'A' => 'push()',
                'B' => 'pop()',
                'C' => 'shift()',
                'D' => 'unshift()',
            ]),
            'correct_option' => 'A',
        ]);

        Questionjs::create([
            'question' => 'Apa hasil dari `typeof "hello"` dalam JavaScript?',
            'options' => json_encode([
                'A' => 'string',
                'B' => 'text',
                'C' => 'object',
                'D' => 'undefined',
            ]),
            'correct_option' => 'A',
        ]);

        Questionjs::create([
            'question' => 'Apa fungsi dari `document.getElementById()`?',
            'options' => json_encode([
                'A' => 'Mengambil elemen berdasarkan ID',
                'B' => 'Mengambil elemen berdasarkan tag',
                'C' => 'Mengambil elemen berdasarkan class',
                'D' => 'Mengambil elemen berdasarkan atribut',
            ]),
            'correct_option' => 'A',
        ]);

        Questionjs::create([
            'question' => 'Apa perbedaan antara `==` dan `===` di JavaScript?',
            'options' => json_encode([
                'A' => 'Tidak ada perbedaan',
                'B' => '`==` membandingkan nilai saja, `===` membandingkan nilai dan tipe',
                'C' => '`==` lebih cepat dibandingkan `===`',
                'D' => '`===` hanya digunakan untuk string',
            ]),
            'correct_option' => 'B',
        ]);

        Questionjs::create([
            'question' => 'Bagaimana cara mendeklarasikan variabel di JavaScript?',
            'options' => json_encode([
                'A' => 'let, const, var',
                'B' => 'int, string, var',
                'C' => 'declare, const, new',
                'D' => 'dim, set, var',
            ]),
            'correct_option' => 'A',
        ]);

        Questionjs::create([
            'question' => 'Apa kegunaan dari metode `addEventListener()`?',
            'options' => json_encode([
                'A' => 'Untuk menghapus elemen dari halaman',
                'B' => 'Untuk menambahkan event pada elemen',
                'C' => 'Untuk mengganti konten elemen',
                'D' => 'Untuk mengatur waktu event',
            ]),
            'correct_option' => 'B',
        ]);

        Questionjs::create([
            'question' => 'Apa nilai awal dari variabel yang belum didefinisikan?',
            'options' => json_encode([
                'A' => 'null',
                'B' => 'undefined',
                'C' => '0',
                'D' => 'false',
            ]),
            'correct_option' => 'B',
        ]);

        Questionjs::create([
            'question' => 'Metode mana yang digunakan untuk menghapus elemen terakhir dari array?',
            'options' => json_encode([
                'A' => 'push()',
                'B' => 'pop()',
                'C' => 'shift()',
                'D' => 'unshift()',
            ]),
            'correct_option' => 'B',
        ]);

        Questionjs::create([
            'question' => 'Apa hasil dari `Boolean(0)` di JavaScript?',
            'options' => json_encode([
                'A' => 'true',
                'B' => 'false',
                'C' => '0',
                'D' => 'undefined',
            ]),
            'correct_option' => 'B',
        ]);
    }
}

