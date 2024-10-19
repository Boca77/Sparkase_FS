<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserInfo extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'cities_id',
        'phone',
        'gender',
        'birth_date',
        'image_path',
        'study_time'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(Cities::class);
    }
}
