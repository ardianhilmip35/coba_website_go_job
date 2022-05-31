<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\lamarkerja;
use Illuminate\Http\Request;
use App\Models\lowongan;
use Illuminate\Support\Facades\Validator;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihatlowongan()
    {
        $data = lowongan::select([
        'id',
        'namalowongan',
        'jenispekerjaan',
        'tingkatjabatan',
        'gajipekerjaan',
        'spesialis',
        'pengalaman',
        'deskripsipekerjaan',
        'namaperusahaan',
        'deskripsiperusahaan',
        'pendidikan',
        'alamatperusahaan',
        'logo',
        'gedung',
        'created_at'
        ])->get();

        return response()->json($data);

    }

    public function lamar(Request $request){
        $upload = Validator::make($request->all(),[
            'lowongan_id' => 'required',
            'pelamar_id' => 'required',
            'deskripsi_lamaran' => 'required',
            'portofolio_pelamar' => 'required|mimes:pdf'
        ]);

        if($upload->fails()){
            return response()->json($upload->errors());       
        }

        $upload = lowongan::FindOrFail($request->lowongan_id);

        $upload = lamarkerja::create([
            'lowongan_id' => $request->lowongan_id,
            'pelamar_id' => $request->pelamar_id,
            'deskripsi_lamaran' => $request->deskripsi_lamaran,
            'portofolio_pelamar' => $request->file('portofolio_pelamar')->move('img/uploads/lamaran/', $request->file('portofolio_pelamar')->getClientOriginalName())
        ]);

        if ($upload) {
            return response()->json([
                'success' => true,
                'message' => 'Lamaran berhasil dikirim',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Lamaran gagal dikirim',
            ], 401);
        }
        
    }
}
