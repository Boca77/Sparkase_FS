<?php

use App\Models\User;
use App\Models\Cities;
use App\Models\Gender;
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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Cities::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Gender::class)->constrained()->cascadeOnDelete();
            $table->string('phone');
            $table->date('birth_date');
            $table->text('image_path')->default(' ')->nullable();
            $table->string('study_time')->default(' ')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
