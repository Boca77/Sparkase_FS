<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityResource;
use App\Models\Cities;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index() {
        return CityResource::collection(
            Cities::all()
        );
    }
}
