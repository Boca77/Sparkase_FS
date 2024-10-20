<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\CheckIfUserIsAdmin;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::resource('courses', CourseController::class);
    // Route::resource('lectures', LectureController::class);


    // Profile routes accessible to all authenticated users
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.post');
    Route::get('/courses/edit/{course}', [CourseController::class, 'edit'])->name('courses.edit.web');
    Route::put('/courses/update/{course}', [CourseController::class, 'update'])->name('courses.update.web');
    Route::delete('/courses/delete/{course}', [CourseController::class, 'destroy'])->name('courses.destroy.web');
});

// A public route, accessible without authentication
Route::get('hello', function () {
    return 'Hello, World!';
});

require __DIR__ . '/auth.php';
