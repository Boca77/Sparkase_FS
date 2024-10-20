<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    protected $fillable = [
        'id',
        'modules_id',
        'name',
        'description'
    ];

    public function modules():BelongsTo
    {
        return $this->belongsTo(Modules::class);
    }

    public function lectures():HasMany
    {
        return $this->hasMany(Lecture::class);
    }
}
