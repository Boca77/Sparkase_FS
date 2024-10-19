<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Lecture;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lectures = Lecture::all();
        return view('lectures.index', compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Courses::all();
        return view('lectures.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Lecture::create($validated);

        return redirect()->route('lectures.index')->with('success', 'Lecture created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lecture = Lecture::findOrFail($id);
        return view('lectures.show', compact('lecture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lecture = Lecture::findOrFail($id);
        $courses = Courses::all();
        return view('lectures.edit', compact('lecture', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lecture = Lecture::findOrFail($id);

        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $lecture->update($validated);

        return redirect()->route('lectures.index')->with('success', 'Lecture updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lecture = Lecture::findOrFail($id);
        $lecture->delete();

        return redirect()->route('lectures.index')->with('success', 'Lecture deleted successfully.');
    }
}
