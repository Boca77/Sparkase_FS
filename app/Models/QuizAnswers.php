<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class QuizAnswers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image'
    ];
    public function question()
    {
        return $this->belongsTo(QuizQuestion::class);
    }
}
