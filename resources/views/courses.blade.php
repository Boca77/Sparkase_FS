<x-app-layout>
    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="container mx-auto px-4 py-8">
            <a href="{{ route('courses.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold display inline-block py-2 px-4 rounded mb-6">
                Add Course!
            </a>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($courses as $course)
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h5 class="text-xl font-bold mb-2">{{ $course->name }}</h5>
                        <p class="text-gray-700 mb-4">{{ $course->description }}</p>

                        <!-- Display each lecture for the course -->
                        @if ($course->lectures)
                            <h6 class="text-lg font-semibold mb-2">Lectures:</h6>
                            <ul class="list-disc list-inside mb-4">
                                @foreach ($course->lectures as $lecture)
                                    <li>
                                        <strong>{{ $lecture->name }}</strong> - {{ $lecture->description }}
                                        <ul class="list-inside ml-4">
                                            <!-- Display lecture body content -->
                                            @foreach ($lecture->lectureBody as $body)
                                                <li class="text-gray-600">{{ $body->your_column_name }}</li>
                                                <!-- Replace with actual column name -->
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-500">No lectures available.</p>
                        @endif

                        <!-- Action Buttons (Edit and Delete) -->
                        <div class="flex justify-between mt-4">
                            <!-- Edit Button -->
                            <a href="{{ route('courses.edit.web', $course->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('courses.destroy.web', $course->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this course?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
