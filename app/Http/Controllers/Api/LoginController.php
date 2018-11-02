<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function postLogin(Request $request)
    {
        Log::info('Login check : start');
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if (Auth::attempt($credentials)) {
                Log::info('Login Check : Finish');
                $userData = Auth::user();
                return response()->json([
                    'status' => 200,
                    'message' => 'Login successful. Please wait...',
                    'data' => $userData,
                ]);
            } else {
                Log::info('Login Check : Wrong Credentials');
                return response()->json([
                    'status' => 500,
                    'message' => 'Username or password is wrong.',
                    'data' => [],
                ]);
            }
        } catch (\Exception $exception) {
            Log::info('Login Check : Exception');
            Log::info($exception);
            return response()->json([
                'status' => 500,
                'message' => 'Username or password is wrong.',
            ]);
        }
    }
}
