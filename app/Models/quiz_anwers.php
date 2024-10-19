<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class quiz_anwers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image'
    ];
    public function question()
    {
        return $this->belongsTo(quiz_question::class);
    }
}
