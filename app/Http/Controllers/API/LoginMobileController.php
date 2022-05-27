<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMobile;
use Illuminate\Support\Facades\Hash;

class LoginMobileController extends Controller
{
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

        return response()
            ->json(['message' => 'Selamat Datang '.$user->nama_pelamar.', di Aplikasi Go Job','access_token' => $token, 'token_type' => 'Bearer', ]);

    }
}
