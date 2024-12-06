<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// database/migrations/xxxx_xx_xx_create_questions_table.php
public function up()
{
    Schema::create('question_html', function (Blueprint $table) {
        $table->id();
        $table->string('question');
        $table->json('options'); // {"A": "...", "B": "...", "C": "...", "D": "..."}
        $table->string('correct_option'); // e.g., "A"
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_html');
    }
};

