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
                'photo_url' => 'https://i.pinimg.com/736x/37/a2/50/37a250f1e917737337068dc3121fb14d.jpg',
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
            [
                'name' =>  'Caesar Kafi Iddo Haqq',
                'position' => 'IoT Development di SMK RUS',
                'photo_url' => 'https://i.pinimg.com/736x/01/a7/3d/01a73da06f9539a21d0af484c26abd90.jpg',
                'message' => 'Sangat helping bingitss,mantapss',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Rakha Ghiyas Ar-Rahman',
                'position' => 'Web Development di SMK RUS',
                'photo_url' => 'https://i.pinimg.com/736x/17/f0/6b/17f06b5b9be28147235b14f020b7fe01.jpg',
                'message' => 'Sangat direkomendasikan untuk pemula',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Simatahari Khoiru Sobri',
                'position' => 'Android Development di SMK RUS',
                'photo_url' => 'https://i.pinimg.com/736x/12/84/44/128444d0677debbc2713ced95d296054.jpg',
                'message' => 'Detail dan keren',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
