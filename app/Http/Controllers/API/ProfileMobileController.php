<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserMobile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileMobileController extends Controller
{
    //UpdateProfil
    // public function update_profile(Request $request){
    //     $validasi = $request->validate([
    //         'nama_pelamar'=>'nullable|min:2|max:50',
    //         'telp_pelamar'=>'nullable|max:15',
    //         'tanggal_lahir'=>'nullable',
    //         'jenis_kelamin'=>'nullable',
    //         'agama'=>'nullable',
    //         'foto'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'alamat_pelamar'=>'nullable',
    //     ]);

    //     try {
    //         if($request->hasFile('foto')){
    //             $image_name=time().$request->file('foto')->getClientOriginalName();
    //             $request->$request->file('foto')->move('img/uploads/profile_images',$image_name);
    //             $validasi['foto']=$image_name;
    //         }
    //         $response = UserMobile::where('id');
    //         $response->update($validasi);
    //             return response()->json([
    //                 'message'=>'Berhasil Update Profil',
    //                 'success'=>true
    //             ],200);

    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'message'=>'Gagal Update Profil',
    //             'errors'=>$e->getMessage()
    //         ],422);
    //     }


    // }
}
