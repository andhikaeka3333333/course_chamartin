<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan oleh model ini
    protected $table = 'testimonials';

    // Menentukan kolom-kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'name',        // Nama pengguna
        'position',    // Posisi atau pekerjaan pengguna
        'photo_url',   // URL foto pengguna
        'message',     // Testimoni pengguna
    ];
}
