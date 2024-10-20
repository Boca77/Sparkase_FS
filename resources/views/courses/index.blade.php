@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-6">Courses</h1>

        <a href="{{ route('courses.create') }}" 
            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
            Create New Course
        </a>

        @if($courses->isEmpty())
            <p class="mt-4 text-gray-600">No courses available.</p>
        @else
            <div class="mt-6">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-gray-100 border-b border-gray-200">
                            <th class="py-3 px-4 text-left">Name</th>
                            <th class="py-3 px-4 text-left">Description</th>
                            <th class="py-3 px-4 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4">{{ $course->name }}</td>
                                <td class="py-3 px-4">{{ Str::limit($course->description, 50) }}</td>
                                <td class="py-3 px-4 text-center">
                                    <a href="{{ route('courses.show', $course->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                                    <a href="{{ route('courses.edit', $course->id) }}" class="text-yellow-500 hover:text-yellow-700 ml-2">Edit</a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline-block ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700"
                                            onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
