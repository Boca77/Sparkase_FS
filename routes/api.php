<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BadgeController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\GenderController;
use App\Http\Controllers\ShowCourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('hello', function () {
    return response()->json([
        'Hello, World!'
    ]);
});

Route::get('/courses/{id}', [ShowCourseController::class, 'show']);

Route::apiResource('/genders', GenderController::class);
Route::apiResource('/cities', CityController::class);
Route::apiResource('/courses', CourseController::class);
Route::apiResource('/badges', BadgeController::class);


