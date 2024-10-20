<x-app-layout>
    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="container mx-auto px-4 py-8">
            <a href="{{ route('courses.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold display inline-block py-2 px-4 rounded mb-6">
                Add Course!
            </a>

            <!-- Display courses in a table -->
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Course Name</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Lectures</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="space-y-4">
                    @foreach ($courses as $course)
                        <tr class="bg-gray-100 border-b border-gray-300">
                            <td class="px-4 py-4 font-bold">{{ $course->name }}</td>
                            <td class="px-4 py-4">{{ $course->description }}</td>
                            <td class="px-4 py-4">
                                @if ($course->lectures)
                                    <ul class="list-disc list-inside">
                                        @foreach ($course->lectures as $lecture)
                                            <li>
                                                <strong>{{ $lecture->name }}</strong> - {{ $lecture->description }}
                                                <ul class="list-inside ml-4">
                                                    @foreach ($lecture->lectureBody as $body)
                                                        <li class="text-gray-600">{{ $body->your_column_name }}</li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p class="text-gray-500">No lectures available.</p>
                                @endif
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex space-x-2">
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
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
