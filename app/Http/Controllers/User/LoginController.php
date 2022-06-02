<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMobile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard/user';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masuklogin()
    {
        return view('auth.login');
    }

    public function loginuser(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        $user = UserMobile::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            return redirect()->route('masukdashboard');
        }else{
            return redirect()->route('masukdashboard');
        }

    }

}
