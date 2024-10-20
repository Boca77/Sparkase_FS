<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modules extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    public function courses():HasMany
    {
        return $this->hasMany(Courses::class);
    }
}
