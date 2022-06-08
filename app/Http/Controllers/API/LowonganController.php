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

        $id_pelamar = UserMobile::where('id',   $request->user()->id)->get();
        $validatedData['pelamar_id'] = $id_pelamar->id;
        $validatedData['portofolio_pelamar'] = $request->file('portofolio_pelamar')->move('img/uploads/lamaran', $request->file('portofolio_pelamar')->getClientOriginalName());

        
        $create = lamarkerja::create($validatedData);

        if($create){

            return response()->json(['status' => 'success', 'message' => 'Lamaran berhasil dikirim']);
        }    
        else{
            return response()->json(['status' => 'error', 'message' => 'Lamaran gagal dikirim']);
        }
    }

    public function lihatlamar(Request $request){
        $data = lamarkerja::where('pelamar_id', $request->user()->id)->get();
        $data = $data->map(function($item){
            $item->lowongan = lowongan::where('id', $item->lowongan_id)->get();
            return $item;
        });
        return response()->json($data);
    }

}
