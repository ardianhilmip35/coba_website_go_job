<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\lowongan;

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
        $upload = $request->validate([
            'id_lowongan' => 'required',
            'pelamar_id' => 'required',
            'deskripsi_lamaran' => 'required',
            'portofolio_pelamar' => 'required|mimes:pdf'
        ]);

        $upload = lowongan::FindOrFail($request->lowongan_id);

        if($upload->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $upload->errors()
            ],401);
        }else{
            $upload['portofolio_pelamar'] = $request->file('portofolio_pelamar')->move('img/uploads/lamaran/', $request->file('logo')->getClientOriginalName());
            lowongan::create($upload);

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
}
