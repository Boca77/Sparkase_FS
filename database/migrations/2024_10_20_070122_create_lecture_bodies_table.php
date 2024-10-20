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
        Schema::create('lecture_bodies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Lecture::class)->constrained()->cascadeOnDelete();
            $table->string('subtitle')->nullable();
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecture_bodies');
    }
};
