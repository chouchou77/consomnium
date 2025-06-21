<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    public function login(Request $req){
        $req->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $user = User::where("email",$req->email)->first();
        if (!$user || !($user->password === $req->password)) {
            return response()->json(["error"=>"wrong information"]);
        }
        $token = $user->createToken("api_token")->plainTextToken;
    
        return response()->json(['token' => $token, 'user' => $user], 200);
    }
    public function logout(Request $req){
        $req->user()->currentAccessToken()->delete();
        return response()->json(["message" => "you logout successfuly"]);
    }
}
