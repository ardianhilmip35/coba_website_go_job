<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPassword;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class ResetPasswordController extends Controller
{
    // public function store(Request $request) {
    //     $this->validate($request. [
    //         "email"=>"required|email",
    //         "password"=>"required"
    //     ]);

    //     if (!auth()->attemp($request->only(['email', 'password']). $request->remember)){
    //         return back()->with("failed", "Invalid Details");
    //     }
    //     return redirect()->route('dashboard.dashboardadm');
    // }
}
