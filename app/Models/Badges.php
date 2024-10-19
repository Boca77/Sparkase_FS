<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badges extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'image_path'
    ];
}
