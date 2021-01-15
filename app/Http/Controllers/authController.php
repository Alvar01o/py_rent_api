<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\UserLogged;

class AuthController extends Controller
{

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || sha1($request->password) != $user->password ) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return new UserLogged($user);
    }

    public function logout(Request $request){

        if(!empty($request->user())) {
            $request->user()->currentAccessToken()->delete();
        }

        return response(['message' => 'Logout successfully'], 200)
            ->header('Content-Type', 'text/plain');

    }

    public function AuthError(Request $request) {
        return ['message'=>'Check Documentation. You should not be here.'];
    }

}
