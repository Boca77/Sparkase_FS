<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LectureBody extends Model
{
    use HasFactory;

    protected $guarded = null;

    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }
}
