<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'cities_id',
        'phone',
        'gender_id',
        'birth_date',
        'image_path',
        'study_time'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(Cities::class, 'cities_id');
    }

    public function gender():BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }
}
