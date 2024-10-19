<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image'
    ];

    public function quiz()
    {
        return $this->brlonsTo(quiz::class);
    }
    public function anwers()
    {
        return $this->hasMany(QuizAnswers::class);
    }
}
