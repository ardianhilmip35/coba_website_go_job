<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('/');
    }

    public function register1()
    {
        return view('/user/register1');
    }
}
