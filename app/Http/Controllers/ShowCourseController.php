<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class ShowCourseController extends Controller
{

    public function show($id) {
        $course = Courses::with('lectures')->find($id);
        return response()->json([
            'data' => $course
        ]);
    }
}
