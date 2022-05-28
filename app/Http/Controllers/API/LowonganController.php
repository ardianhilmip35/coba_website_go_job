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
}
