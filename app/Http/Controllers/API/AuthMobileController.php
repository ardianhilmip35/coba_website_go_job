<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserMobile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AuthMobileController extends Controller
{
    //Login
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $user = UserMobile::where('email', $request->email)->first();
        if(! $user || ! Hash::check($request->password, $user->password)){
            return response()->json([
                'success' => false,
                'message' => 'Email atau password salah'
            ], 401);
        }
        $user = UserMobile::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'Selamat Datang '.$user->nama_pelamar.', di Aplikasi Go Job','access_token' => $token, 'token_type' => 'Bearer', 'data'=>$user ]);

    }

    //Register
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_pelamar' => 'required|string|max:50',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $user = UserMobile::create([
            'nama_pelamar' => $request->nama_pelamar,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
    
}
