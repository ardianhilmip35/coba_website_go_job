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
        
    }

    public function lihatlamar(Request $request){
        $data = lamarkerja::where('pelamar_id', $request->user()->id)->get();
        return response()->json($data);
    }
}
