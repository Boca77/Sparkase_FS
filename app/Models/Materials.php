<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materials extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'lecture_id',
        'type',
        'content'
    ];

    public function lecture():BelongsTo
    {
        return $this->belongsTo(Lecture::class);
    }
}
