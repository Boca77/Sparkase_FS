<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image'
    ];

    public function questions()
    {
        return $this->hasMany(QuizQuestion::class);
    }
}
