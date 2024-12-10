<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CSSController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HTMLController;
use App\Http\Controllers\JSController;
use App\Http\Controllers\LearnPathController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/materi', [MateriController::class, 'index'])->name('materi');
    Route::get('/materi/{title}', [MateriController::class, 'show'])->name('materi.show');
    Route::get('/quiz-{title}', [MateriController::class, 'quiz'])->name('quiz');
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');

    Route::get('/quiz-css', [CSSController::class, 'index'])->name('quiz.css.index');
    Route::post('/quiz-css/submit', [CSSController::class, 'submit'])->name('quiz.css.submit');

    Route::get('/quiz-html', [HTMLController::class, 'index'])->name('quiz.html.index');
    Route::post('/quiz-html/submit', [HTMLController::class, 'submit'])->name('quiz.html.submit');

    Route::get('/quiz-js', [JSController::class, 'index'])->name('quiz.js.index');
    Route::post('/quiz-js/submit', [JSController::class, 'submit'])->name('quiz.js.submit');

    // Route::get('/quiz-css', [CSSController::class, 'index'])->name('quiz.index');
    // Route::post('/quiz-css/submit', [CSSController::class, 'submit'])->name('quiz.submit');

    // Route::get('/quiz-js', [JSController::class, 'index'])->name('quiz.index');
    // Route::post('/quiz-js/submit', [JSController::class, 'submit'])->name('quiz.submit');


});

require __DIR__ . '/auth.php';
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/learn-path', [LearnPathController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/purpose', [PurposeController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);


