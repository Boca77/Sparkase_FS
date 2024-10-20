<x-app-layout>
    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-md shadow-md">
            <h2 class="text-2xl font-bold mb-6">Edit Course</h2>
            @dump()
            <form action="{{ route('courses.update.web', $course->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Module Selection -->
                <div class="mb-4">
                    <label for="module_id" class="block text-gray-700 font-medium">Select Module</label>
                    <select name="module_id" id="module_id"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @foreach ($modules as $module)
                            <option value="{{ $module->id }}"> {{ $module->name }} </option>
                        @endforeach
                    </select>
                    @error('module_id')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Course Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Course Name</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        value="{{ old('name', $course->name) }}">
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Course Description -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium">Course Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description', $course->description) }}</textarea>
                    @error('description')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Update Course
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
