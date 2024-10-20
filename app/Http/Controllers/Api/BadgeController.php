<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BadgeResource;
use App\Models\Badges;
use Illuminate\Http\Request;

class BadgeController extends Controller
{
    public function index() {
        return BadgeResource::collection(
            Badges::all()
        );
    }
}
