<?php
namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Menampilkan daftar materi
     */
    public function index()
    {
        $materi = Materi::all();
        return view('materis.index', [
            'materi' => $materi,
            'judul' => 'Materi',
        ]);
    }

    /**
     * Menampilkan detail materi berdasarkan ID
     */
    public function show($tittle)
    {
        $materi = Materi::where('title', $tittle)->firstOrFail();

        // Tentukan nama file Blade berdasarkan title
        $viewName = match ($tittle) {
            "HTML" => 'materis.materihtml',
            "CSS" => 'materis.matericss',
            "JavaScript" => 'materis.materijs',
            default => abort(404), // Jika title tidak ditemukan
        };

        return view($viewName, [
            'materi' => $materi,
            'title' => $materi->title,
        ]);
    }

    public function quiz($title)
    {
        // Tentukan model berdasarkan title
        $modelClass = match ($title) {
            "HTML" => \App\Models\QuestionHTML::class,
            "CSS" => \App\Models\QuestionCSS::class,
            "JavaScript" => \App\Models\QuestionJS::class,
            default => abort(404), // Jika title tidak valid
        };

        // Ambil data pertanyaan dari model yang sesuai
        $questions = $modelClass::all();

        // Tentukan nama file Blade quiz berdasarkan title
        $quizView = match ($title) {
            "HTML" => 'quiz.indexhtml',
            "CSS" => 'quiz.indexcss',
            "JavaScript" => 'quiz.indexjs',
            default => abort(404),
        };

        // Kirim data ke view
        return view($quizView, [
            'title' => "Quiz $title",
            'questions' => $questions,
        ]);
    }
}

