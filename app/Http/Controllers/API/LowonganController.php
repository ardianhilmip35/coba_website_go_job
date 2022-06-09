<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\lamarkerja;
use Illuminate\Http\Request;
use App\Models\lowongan;
use App\Models\UserMobile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihatlowongan()
    {
        $data = lowongan::all();

        return response()->json($data);

    }

    public function lamar(Request $request){
        
        $validatedData = $request->validate([
            'pelamar_id' => 'required',
            'lowongan_id' => 'required',
            'deskripsi_lamaran' => 'required',
            'portofolio_pelamar' => 'required|mimes:pdf'
        ]);

        $validatedData['pelamar_id'] = $request->pelamar_id;
        $validatedData['portofolio_pelamar'] = $request->file('portofolio_pelamar')->move('img/uploads/lamaran', $request->file('portofolio_pelamar')->getClientOriginalName());
        $create = lamarkerja::create($validatedData);

        return response()->json($create);
    }

    public function lihatlamar(Request $request){
        $data = lamarkerja::where('pelamar_id', $request->user()->id)->get();
        return response()->json($data);
    }

}
