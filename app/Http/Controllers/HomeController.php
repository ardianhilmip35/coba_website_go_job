<?php

namespace App\Http\Controllers;
use App\Models\lowongan;
use App\Models\lamarkerja;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_lowongan = lowongan::all()->count();
        $jumlah_lamarkerja = lamarkerja::all()->count();
        return view('dashboard.dashboardadm')->with('jumlah_lowongan', $jumlah_lowongan)->with('jumlah_lamarkerja', $jumlah_lamarkerja);
    }
}
