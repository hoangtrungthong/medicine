<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\ChangePasswordRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\JWT;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $params = $request->only([
            'username',
            'password',
        ]);

        if (!$token = JWTAuth::attempt($params)) {
            return $this->errorResponse(Response::HTTP_UNAUTHORIZED, Response::HTTP_UNAUTHORIZED, [], 'Please check your username or password');
        }

        return $this->responseToken($token);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $params = $request->only([
            'username',
            'name',
            'email',
            'password',
            'phone',
            'address_id',
        ]);

        User::create($params);
        $token = JWTAuth::attempt($params);

        return $this->responseToken($token);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return $this->successResponse(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->responseToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile()
    {
        return $this->successResponse(auth()->user());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function responseToken($token, $user = null)
    {
        return $this->successResponse([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => $user ?? auth()->user(),
        ]);
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $params = $request->only([
            'old_password',
            'new_password',
        ]);

        $user = auth()->user()->update(
            ['password' => bcrypt($params['new_password'])]
        );

        return $this->successResponse($user);
    }
}
