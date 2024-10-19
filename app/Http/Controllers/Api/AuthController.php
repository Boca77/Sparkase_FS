<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginUserRequest $request)
{
    $credentials = $request->validated();
    if (!Auth::attempt($credentials)) {
        return response()->json([
            'message' => 'Password incorrect!',
            'status' => 401,
        ], 401);
    }

    /** @var User $user */
    $user = Auth::user();
    $token = $user->createToken('main')->plainTextToken;

    return response()->json([
        'message' => 'Authenticated',
        'user' => $user,
    ], 200)->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ]);
}

}
