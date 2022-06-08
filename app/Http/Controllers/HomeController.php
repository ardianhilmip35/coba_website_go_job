<?php

namespace App\Http\Controllers;
use App\Models\lowongan;
use App\Models\lamarkerja;
use Illuminate\Support\Facades\DB;
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
<<<<<<< HEAD
        $jumlah_lamarkerja = lamarkerja::where('pelamar_id', Auth::user()->id)->count();
=======
        $jumlah_lamarkerja = lamarkerja::where('pelamar_id', Auth::user()->id)->get();
        $jumlah_lamarkerja = $jumlah_lamarkerja->map(function($item){
            $item->lowongan = lowongan::where('id', $item->lowongan_id)->count();
            return $item;
        });
>>>>>>> f531bb93a3dab2c9897748b367b85aa5d12d9d45

        $total_pelamar = lamarkerja::select(DB::raw("CAST(SUM(id) as int) as id"))
        ->GroupBy(DB::raw("MONTH(created_at)"))
        ->pluck('id');
        
        $bulan = lamarkerja::select(DB::raw("MONTHNAME(created_at) as bulan"))->orderBy('created_at', 'asc')
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');
        return view('dashboard.dashboardadm',compact('total_pelamar','bulan'))->with('jumlah_lowongan', $jumlah_lowongan)->with('jumlah_lamarkerja', $jumlah_lamarkerja);
    }
}
