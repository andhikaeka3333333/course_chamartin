<?php

// app/Http/Controllers/QuizController.php
namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use PDF;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('quiz.index', compact('questions'));
    }

    public function submit(Request $request)
    {
        $answers = $request->input('answers');
        $questions = Question::all();

        $score = 0;
        foreach ($questions as $question) {
            if (isset($answers[$question->id]) && $answers[$question->id] === $question->correct_option) {
                $score += 10; // 10 points per correct answer
            }
        }

        if ($score >= 70) {
            $pdf = PDF::loadView('certificates.quiz', ['score' => $score])
                ->setPaper('a4', 'landscape'); // Atur orientasi menjadi landscape
            return $pdf->download('certificate.pdf');

        }

        return back()->with('message', "Your score is $score. You need at least 70 to pass.");
    }
}
