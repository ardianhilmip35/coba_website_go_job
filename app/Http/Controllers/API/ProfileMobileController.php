<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserMobile;
use Illuminate\Foundation\Auth\UserMobile as AuthUserMobile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Storage;
class ProfileMobileController extends Controller
{

    public function tampil_profil(Request $request)
    {
        // $user = UserMobile::where('id', Auth::user()->id)->first();   
        $user = UserMobile::where('id', $request->id)->first();
        if (is_null($user)) {
            return $this->sendError('Server sedang error, silahkan coba lagi nanti');
        }
        return response()->json([
            "success" => true,
            "message" => "Data profil berhasil ditampilkan",
            "data" => $user,
        ]);
    }

    // public function edit_profil(Request $request)
    // {
    //     $user = $request->validate([
    //         'nama_pelamar' => 'nullable|string|max:255',
    //         'telp_pelamar' => 'nullable|max:15|min:10',
    //         'tanggal_lahir' => 'nullable|date',
    //         'jenis_kelamin' => 'nullable|min:10',
    //         'agama' => 'nullable|max:50|min:3',
    //         'alamat_pelamar' => 'nullable|max:255|min:3',
    //         'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
    //         'cv_pelamar' => 'nullable|mimes:pdf',
    //         'universitas' => 'nullable',
    //         'jurusan' => 'nullable',
    //         'prodi' => 'nullable',
    //         'pengalaman' => 'nullable',
    //         'posisi' => 'nullable',
    //         'perusahaan' => 'nullable',
    //         'tahun' => 'nullable',
    //         'spesialis' => 'nullable',
    //         'lokasi' => 'nullable',
    //         'gaji' => 'nullable'
    //     ]);

        
    //     //foto
    //     if (empty($request->file('foto'))) {
    //         $user = UserMobile::FindOrFail($request -> id);
    //         $user->update([
    //             'nama_pelamar' => $request->nama_pelamar,
    //             'telp_pelamar' => $request->telp_pelamar,
    //             'tanggal_lahir' => $request->tanggal_lahir,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'agama' => $request->agama,
    //             'alamat_pelamar' => $request->alamat_pelamar,
    //             'universitas' =>  $request->universitas,
    //             'jurusan' =>  $request->jurusan,
    //             'prodi' =>  $request->prodi,
    //             'pengalaman' =>  $request->pengalaman,
    //             'posisi' =>  $request->posisi,
    //             'perusahaan' =>  $request->perusahaan,
    //             'tahun' =>  $request->tahun,
    //             'spesialis' =>  $request->spesialis,
    //             'lokasi' =>  $request->lokasi,
    //             'gaji' =>  $request->gaji
    //         ]);
            
    //     } else {
    //         $user = UserMobile::FindOrFail($request -> id);
    //         Storage::delete($user->foto);
    //         $user->update([
    //             'nama_pelamar' => $request->nama_pelamar,
    //             'telp_pelamar' => $request->telp_pelamar,
    //             'tanggal_lahir' => $request->tanggal_lahir,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'agama' => $request->agama,
    //             'alamat_pelamar' => $request->alamat_pelamar,
    //             'universitas' =>  $request->universitas,
    //             'jurusan' =>  $request->jurusan,
    //             'prodi' =>  $request->prodi,
    //             'pengalaman' =>  $request->pengalaman,
    //             'posisi' =>  $request->posisi,
    //             'perusahaan' =>  $request->perusahaan,
    //             'tahun' =>  $request->tahun,
    //             'spesialis' =>  $request->spesialis,
    //             'lokasi' =>  $request->lokasi,
    //             'gaji' =>  $request->gaji,
    //             'foto' => $request->file('foto')->move('img/uploads/foto_profil', $request->file('foto')->getClientOriginalName())
    //         ]);
    //     }

    //     //cvpelamar
    //     if (empty($request->file('cv_pelamar'))) {
    //         $user = UserMobile::FindOrFail($request -> id);
    //         $user->update([
    //             'nama_pelamar' => $request->nama_pelamar,
    //             'telp_pelamar' => $request->telp_pelamar,
    //             'tanggal_lahir' => $request->tanggal_lahir,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'agama' => $request->agama,
    //             'alamat_pelamar' => $request->alamat_pelamar,
    //             'universitas' =>  $request->universitas,
    //             'jurusan' =>  $request->jurusan,
    //             'prodi' =>  $request->prodi,
    //             'pengalaman' =>  $request->pengalaman,
    //             'posisi' =>  $request->posisi,
    //             'perusahaan' =>  $request->perusahaan,
    //             'tahun' =>  $request->tahun,
    //             'spesialis' =>  $request->spesialis,
    //             'lokasi' =>  $request->lokasi,
    //             'gaji' =>  $request->gaji
    //         ]);
            
    //     } else {
    //         $user = UserMobile::FindOrFail($request -> id);
    //         Storage::delete($user->cv_pelamar);
    //         $user->update([
    //             'nama_pelamar' => $request->nama_pelamar,
    //             'telp_pelamar' => $request->telp_pelamar,
    //             'tanggal_lahir' => $request->tanggal_lahir,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'agama' => $request->agama,
    //             'alamat_pelamar' => $request->alamat_pelamar,
    //             'universitas' =>  $request->universitas,
    //             'jurusan' =>  $request->jurusan,
    //             'prodi' =>  $request->prodi,
    //             'pengalaman' =>  $request->pengalaman,
    //             'posisi' =>  $request->posisi,
    //             'perusahaan' =>  $request->perusahaan,
    //             'tahun' =>  $request->tahun,
    //             'spesialis' =>  $request->spesialis,
    //             'lokasi' =>  $request->lokasi,
    //             'gaji' =>  $request->gaji,
    //             'cv_pelamar' => $request->file('cv_pelamar')->move('img/uploads/cv_pelamar', $request->file('cv_pelamar')->getClientOriginalName())
    //         ]);
    //     }

    //         return response()->json([
    //             "success" => true,
    //             "message" => "Profilmu berhasil diupdate.",
    //             "data" => $user,
    //         ]);
        
    // }

    public function update_profile(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_pelamar' => 'nullable|string|max:255',
            'telp_pelamar' => 'nullable|max:15|min:10',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|min:10',
            'agama' => 'nullable|max:50|min:3',
            'alamat_pelamar' => 'nullable|max:255|min:3',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'cv_pelamar' => 'nullable|mimes:pdf',
            'universitas' => 'nullable',
            'jurusan' => 'nullable',
            'prodi' => 'nullable',
            'pengalaman' => 'nullable',
            'posisi' => 'nullable',
            'perusahaan' => 'nullable',
            'tahun' => 'nullable',
            'spesialis' => 'nullable',
            'lokasi' => 'nullable',
            'gaji' => 'nullable'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message'=>'Validations fails',
                'errors'=>$validator->errors()
            ],422);
        } 

        $user=$request->user();

        if($request->hasFile('foto', 'cv_pelamar')){
            if($user->foto && $user->cv_pelamar){
                $old_path = public_path().'img/uploads/foto_profil'.$user->foto && public_path().'img/uploads/cv_pelamar'.$user->cv_pelamar;
                if(File::exists($old_path)){
                    File::delete($old_path);
                }
            }

            $image_name='foto-'.time().'.'.$request->foto->extension() && $request->cv_pelamar->extension();
            $request->foto->move(public_path('img/uploads/foto_profil'),$image_name) && $request->cv_pelamar->move(public_path('img/uploads/cv_pelamar'),$image_name);
            
        }else{
            $image_name=$user->foto && $user->cv_pelamar;
        }


        $user->update([
            'nama_pelamar' => $request->nama_pelamar,
            'telp_pelamar' => $request->telp_pelamar,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat_pelamar' => $request->alamat_pelamar,
            'foto' => $image_name,
            'cv_pelamar' => $image_name,
            'universitas' =>  $request->universitas,
            'jurusan' =>  $request->jurusan,
            'prodi' =>  $request->prodi,
            'pengalaman' =>  $request->pengalaman,
            'posisi' =>  $request->posisi,
            'perusahaan' =>  $request->perusahaan,
            'tahun' =>  $request->tahun,
            'spesialis' =>  $request->spesialis,
            'lokasi' =>  $request->lokasi,
            'gaji' =>  $request->gaji
        ]);

        return response()->json([
            'message'=>'Profile successfully updated',
        ],200);


    }
    

}