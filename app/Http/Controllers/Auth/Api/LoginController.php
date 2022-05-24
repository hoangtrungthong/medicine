<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $token =auth()->user()->createToken($request->device);
            auth()->user()->token = $token->plainTextToken;

            return response()->json(auth()->user());
        }
    }
}
