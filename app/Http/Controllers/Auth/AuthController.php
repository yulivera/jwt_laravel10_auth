<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Registro de usuarios
     */
    public function register(Request $request){
        $this->validate($request,[
            'name' => 'required|max:255|',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'user' => $user,
            'token' => $token
        ],201);        
    }

    /**
     * Ingresar
     * LoginRequest: validate 
     */
    public function login(LoginRequest $request){
        $crendencials = $request->only('email','password');
        
        try{
            if(!$token = JWTAuth::attempt($crendencials)){
                return response()->json([
                    'error'=>'invalid credentials'
                ], 400);
            }

        }catch(JWTException $e){
            return response()->json([
                'error' => 'not create token'
            ], 500);
        }
        // success
        return response()->json(compact('token'));

    }
}
