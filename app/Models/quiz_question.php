<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz_question extends Model
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
        return $this->hasMany(quiz_anwers::class);
    }
}
