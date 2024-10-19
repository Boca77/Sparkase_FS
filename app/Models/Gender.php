<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gender extends Model
{
    protected $fillable = [
        'id',
        'type'
    ];

    public function userInfo():HasMany
    {
        return $this->hasMany(UserInfo::class);
    }
}
