<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboardadm()
    {
        return view('dashboard.dashboardadm');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboarduser()
    {
        return view('dashboard.dashboarduser');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
    
}
