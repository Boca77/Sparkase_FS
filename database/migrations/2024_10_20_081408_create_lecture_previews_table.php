<?php

use App\Models\Lecture;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lecture_previews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Lecture::class)->constrained()->cascadeOnDelete();
            $table->text('content');
            $table->json('learn_points');
            $table->text('fun_fact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture_previews');
    }
};
