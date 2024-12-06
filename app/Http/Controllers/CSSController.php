<?php

// app/Http/Controllers/QuizController.php
namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionCSS;
use Illuminate\Http\Request;
USE Barryvdh\DomPDF\Facade\Pdf;

class CSSController extends Controller
{
    public function index()
    {
        $questions = QuestionCSS::all();
        return view('quiz.indexcss', compact('questions'));
    }

    public function submit(Request $request)
    {
        $answers = $request->input('answers');
        $questions = QuestionCSS::all();
        $score = 0;
        $kursus = "CSS";
        foreach ($questions as $question) {
            if (isset($answers[$question->id]) && $answers[$question->id] === $question->correct_option) {
                $score += 10; // 10 points per correct answer
            }
        }

        if ($score >= 70) {
            $pdf = PDF::loadView('certificates.quiz', [
                'score' => $score,
                'kursus' => $kursus,
            ])->setPaper('a4', 'landscape'); // Atur orientasi menjadi landscape
            return $pdf->download('certificate.pdf');
        }

        return back()->with('message', "Your score is $score. You need at least 70 to pass.");
    }
}
