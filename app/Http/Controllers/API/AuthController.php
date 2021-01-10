<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Profile;
use App\Http\Resources\Profile as ProfileResource;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api',['except'=>'login']);
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);
           
        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        
        $user = $request->user();
            
        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;
        
        $token->save();

        return response()->json([
            'accessToken' => $tokenResult->accessToken,
            'tokenType' => 'Bearer',
            'profile' => new ProfileResource($user->profile),
            'expiresAt' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toIso8601String()
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
	}
}
