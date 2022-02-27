<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\User as UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|exists:users',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];


        $user = User::whereEmail($data['email'])->firstOrFail();

        if (!Hash::check($data['password'], $user->password)) {
            return response([
                'data' => 'The information is incorrect',
                'status' => 'error'
            ], 403);
        }

        $user->update([
            'api_token' => Str::random(100)
        ]);

        return new UserResource($user);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
			'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
			'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'api_token' => Str::random(100)
        ]);

        return new UserResource($user);
    }
}
