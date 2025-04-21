<?php

namespace App\Http\Controllers\Api\v1;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role' => 'required'
        ]);

        $is_exist_email = User::where('email', $request->email)->first();
        if($is_exist_email) {
            return response()->json([
                'message' => 'Email Already Exist'
            ], Response::HTTP_CONFLICT);
        }
        
        try{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'User created successfully',
                'data' => [
                    'token' => $token,
                    'user'  => $user
                ]
            ]);
            
        } catch(Exception $e){
            return response()->json([
                'message' => 'Internal server error',
                'error' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password, $user->password)){
            $token = $user->createToken('auth_token')->plainTextToken;
            
            return response()->json([
                'message' => 'Login successfully',
                'data' => [
                    'token' => $token,
                    'user'  => $user
                ]
            ], Response::HTTP_OK);

            return response()->json([
                'message' => 'Email or password is incorect',
            ], Response::HTTP_OK);
        }
    }

    function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout successfully'
        ], Response::HTTP_OK);
    }
}
