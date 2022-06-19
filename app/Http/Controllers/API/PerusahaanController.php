<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\lowongan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserMobile;


class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lihatperusahaan(Request $request)
    {
        $data = lowongan::where('users_id', $request->users_id)->first();
        return response()->json([
            'data' => $data
            ]
        );
        // return response()->json($data);
    }
}
