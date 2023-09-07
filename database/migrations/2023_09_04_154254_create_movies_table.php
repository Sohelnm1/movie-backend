<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id(); // Auto-incrementing integer primary key
            $table->string('original_language');
            $table->string('original_title');
            $table->text('overview');
            $table->float('popularity');
            $table->string('backdrop_path');
            $table->string('poster_path');
            $table->date('release_date');
            $table->string('title');
            $table->float('vote_average');
            $table->integer('vote_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
}