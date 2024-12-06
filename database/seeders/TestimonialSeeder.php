<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'Yusuf Rizqy Mubarok',
                'position' => 'Web Developer',
                'photo_url' => 'https://i.pinimg.com/736x/5f/07/cf/5f07cf097ff10dfd4cf2f559bae9c544.jpg',
                'message' => 'Seneng banget bisa belajar di Chamartin!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andhika Eka Santosa ',
                'position' => 'Android Developer di SMK RUS',
                'photo_url' => 'https://i.ibb.co.com/s3KKGd2/p.jpg',
                'message' => 'Saya sangat terbantu dengan adanya Chamartin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Rayhan Fathurrahman Rabbani',
                'position' => 'Web Developer di SMK RUS',
                'photo_url' => 'https://i.ibb.co.com/yfbw1YX/Whats-App-Image-2024-12-05-at-21-39-55-90d46e00.jpg',
                'message' => 'Materi mudah dipahami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Wisnu Ibrahimma Fadzillah',
                'position' => 'Android Developer di SMK RUS',
                'photo_url' => 'https://i.pinimg.com/736x/86/ef/27/86ef277f2a0119aee315fc592c28e530.jpg',
                'message' => 'Saya sangat merekomendasikan Course Chamartin kepada siapa saja yang ingin belajar tentang pemrograman.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Suyuful Bitriq Alqowi',
                'position' => 'UI/UX di SMK RUS',
                'photo_url' => 'https://i.pinimg.com/736x/ea/45/49/ea4549a34e6d5c73d943c7721dbb20bb.jpg',
                'message' => 'Materi melimpah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Muhammad Miqdam Rafi Afghani',
                'position' => 'Game Development di SMK RUS',
                'photo_url' => 'https://i.pinimg.com/736x/fb/1e/1d/fb1e1d2cda7514f22247331276e6e2ab.jpg',
                'message' => 'Saya Sangat Terbantu, Saya Rekomendasikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
