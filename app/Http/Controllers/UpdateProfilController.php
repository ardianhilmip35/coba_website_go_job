<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateProfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profil_perusahaan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('admin.profil_perusahaan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validate = $request->validate([
            'nama_admin' => 'required|max:50',
            'nama_perusahaan' => 'required|max:50',
            'deskripsi_perusahaan' => 'required|min:50',
            'telp_perusahaan' => 'required|max:15',
            'alamat_perusahaan' => 'required|min:50',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gedung' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website_perusahaan' => 'required'
        ]);

        //logo
        if (empty($request->file('logo'))) {
            $validate = User::FindOrFail(auth()->user()->id);
            $validate->update([
                'nama_admin' => $request->nama_admin,
                'nama_perusahaan' => $request->nama_perusahaan,
                'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
                'telp_perusahaan' => $request->telp_perusahaan,
                'alamat_perusahaan' => $request->alamat_perusahaan,
                'website_perusahaan' => $request->website_perusahaan
            ]);
            
        } else {
            $validate = User::FindOrFail(auth()->user()->id);
            Storage::delete($validate->logo);
            $validate->update([
                'nama_admin' => $request->nama_admin,
                'nama_perusahaan' => $request->nama_perusahaan,
                'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
                'telp_perusahaan' => $request->telp_perusahaan,
                'alamat_perusahaan' => $request->alamat_perusahaan,
                'website_perusahaan' => $request->website_perusahaan,
                'logo' => $request->file('logo')->move('img/lowongan/', time().rand(100,900) . '.' .$request->file('logo')->getClientOriginalName())
            ]);
            }

        //gedung
        if (empty($request->file('gedung'))) {
            $validate = User::FindOrFail(auth()->user()->id);
            $validate->update([
                'nama_admin' => $request->nama_admin,
                'nama_perusahaan' => $request->nama_perusahaan,
                'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
                'telp_perusahaan' => $request->telp_perusahaan,
                'alamat_perusahaan' => $request->alamat_perusahaan,
                'website_perusahaan' => $request->website_perusahaan

            ]);
        
        } else {
            $validate = User::FindOrFail(auth()->user()->id);
            Storage::delete($validate->gedung);
            $validate->update([
                'nama_admin' => $request->nama_admin,
                'nama_perusahaan' => $request->nama_perusahaan,
                'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
                'telp_perusahaan' => $request->telp_perusahaan,
                'alamat_perusahaan' => $request->alamat_perusahaan,
                'website_perusahaan' => $request->website_perusahaan,
                'gedung' => $request->file('gedung')->move('img/lowongan/', time().rand(100,900) . '.' .$request->file('gedung')->getClientOriginalName())
            ]);
            
        }
        
        return redirect()->route('perusahaan')->with('success', 'Data Perusahaan berhasil diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
