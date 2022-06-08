<?php

namespace App\Http\Controllers;
use App\Models\lowongan;
use App\Models\lamarkerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $jumlah_lowongan = lowongan::where('users_id', Auth::user()->id)->count();
        $jumlah_lamarkerja = lamarkerja::where('pelamar_id', Auth::user()->id)->firstOrFail()->count();
        return view('dashboard.dashboardadm')->with('jumlah_lowongan', $jumlah_lowongan)->with('jumlah_lamarkerja', $jumlah_lamarkerja);
    }
}
