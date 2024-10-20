<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Modules;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::query()->with('modules', 'lectures.lectureBody')->get();
        return view('courses', compact('courses'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = Modules::get();
        return view('course-form', compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Courses::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Courses::findOrFail($id);
        return view('courses.show', compact('corse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $course)
    {
        $modules = Modules::get();
        $course->load('modules');
        return view('courseEdit', compact('course', 'modules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courses $course)
    {
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'module_id' => 'required|exists::modules,id',
        // ]);

        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
