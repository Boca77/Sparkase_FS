<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
