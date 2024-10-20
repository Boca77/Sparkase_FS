<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    $user->load('userInfo.city');


    $token = $user->createToken('main')->plainTextToken;

    return response()->json([
        'message' => 'Authenticated',
        'user' => $user,
        // 'city_name' => $user->userInfo?->city?->name ?? 'N/A',
    ], 200)->header('Authorization', 'Bearer ' . $token);
}

public function register(RegisterUserRequest $request)
{
    $user = User::create([
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'password' => bcrypt($request->password)
    ]);

    $user_info = UserInfo::create([
        'user_id' => $user->id,
        'gender_id' => $request->gender_id,
        'cities_id' => $request->cities_id,
        'birth_date' => $request->birth_date,
        'phone' => $request->phone
    ]);

    $token = $user->createToken('main')->plainTextToken;

    return response()->json([
        'message' => 'Authenticated',
    ], 200)->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ]);



}


}

