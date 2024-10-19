<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserEvaluations extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'courses_id',
        'recommendation',
        'grade',
        'message'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function courses():BelongsTo
    {
        return $this->belongsTo(Courses::class);
    }
    use HasFactory;
}
