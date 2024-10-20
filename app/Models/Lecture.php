<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'courses_id',
        'name',
        'description',
        'audio_path',
        'duration'
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class);
    }

    public function lectureBody()
    {
        return $this->hasMany(LectureBody::class);
    }
}
