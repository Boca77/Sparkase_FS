<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $course = Courses::with('lectures')->get();
        return response()->json([
            'data' => $course
        ]);
    }
}
