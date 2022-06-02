<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMobile;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:pelamar');
    // }

    public function masukregis(){
        return view('auth.register');
    }

    public function registeruser(Request $data)
    {
        $registerUser = $data->validate(
            [
                'nama_pelamar' => 'required|string|max:50',
                'email' => 'required|email:dns|unique:pelamar',
                'password' => 'required|min:8|max:20'
            ]
        );

        $registerUser['nama_pelamar'] = $data['first_name'].' '.$data['last_name'];
        $registerUser['password'] = Hash::make($registerUser['password']);
        UserMobile::create($registerUser);

        return redirect()->route('masuklogin')->with('success', 'Berhasil mendaftar, silahkan login');


    }
}
