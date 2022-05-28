<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihatperusahaan()
    {
        $data = User::select([
            'id',
            'nama_perusahaan',
            'deskripsi_perusahaan',
            'telp_perusahaan',
            'alamat_perusahaan',
            'logo',
            'gedung',
            'website_perusahaan'
        ])->get();
        return response()->json($data);
    }
}
