<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lamarkerja;

class LaporanController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan()
    {
        $dtLaporan = lamarkerja::with('pelamar', 'lowongan')->paginate(5);
        return view('admin.lowongan.laporan', compact('dtLaporan'));
    }
}
