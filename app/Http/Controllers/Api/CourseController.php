<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        return CourseResource::collection(
            Courses::all()
        );
    }
}
