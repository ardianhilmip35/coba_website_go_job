<?php

namespace App\Http\Controllers;

use App\Models\lowongan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class LowonganController extends Controller
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
        $lowongan = lowongan::all();
        return view('admin.lowongan.index', compact('lowongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid = User::all();
        return view('admin.lowongan.create', compact('userid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'users_id' => 'required',
            'namalowongan' => 'required',
            'jenispekerjaan' => 'required',
            'tingkatjabatan' => 'required',
            'gajipekerjaan' => 'required',
            'spesialis' => 'required',
            'pengalaman' => 'required',
            'deskripsipekerjaan' => 'required',
            'namaperusahaan' => 'required',
            'deskripsiperusahaan' => 'required',
            'pendidikan' => 'required',
            'alamatperusahaan' => 'required',
            'logo' => 'required|image|file|max:5120',
            'gedung' => 'required|image|file|max:5120',
        ]);

        $validate['logo'] = $request->file('logo')->move('img/uploads/lowongan/', $request->file('logo')->getClientOriginalName());
        $validate['gedung'] = $request->file('gedung')->move('img/uploads/lowongan/', $request->file('gedung')->getClientOriginalName());
        lowongan::create($validate);
        

        return redirect()->route('lowongan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function show(lowongan $lowongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iklan = lowongan::find($id);
        return view('admin.lowongan.edit', compact('iklan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'namalowongan' => 'required',
            'jenispekerjaan' => 'required',
            'tingkatjabatan' => 'required',
            'gajipekerjaan' => 'required',
            'spesialis' => 'required',
            'pengalaman' => 'required',
            'deskripsipekerjaan' => 'required',
            'namaperusahaan' => 'required',
            'deskripsiperusahaan' => 'required',
            'pendidikan' => 'required',
            'alamatperusahaan' => 'required',
            'logo' => 'image|file|max:5120',
            'gedung' => 'image|file|max:5120',
        ]);

        //logo
        if (empty($request->file('logo'))) {
            $validate = lowongan::FindOrFail($id);
            $validate->update([
                'namalowongan' => $request->namalowongan,
                'jenispekerjaan' => $request->jenispekerjaan,
                'tingkatjabatan' => $request->tingkatjabatan,
                'gajipekerjaan' => $request->gajipekerjaan,
                'spesialis' => $request->spesialis,
                'pengalaman' => $request->pengalaman,
                'deskripsipekerjaan' => $request->deskripsipekerjaan,
                'pendidikan' => $request->pendidikan,
                'alamatperusahaan' => $request->alamatperusahaan


            ]);
        } else {
            $validate = lowongan::FindOrFail($id);
            Storage::delete($validate->logo);
            $validate->update([
                'namalowongan' => $request->namalowongan,
                'jenispekerjaan' => $request->jenispekerjaan,
                'tingkatjabatan' => $request->tingkatjabatan,
                'gajipekerjaan' => $request->gajipekerjaan,
                'spesialis' => $request->spesialis,
                'pengalaman' => $request->pengalaman,
                'deskripsipekerjaan' => $request->deskripsipekerjaan,
                'pendidikan' => $request->pendidikan,
                'alamatperusahaan' => $request->alamatperusahaan,
                'logo' => $request->file('logo')->move('img/uploads/lowongan/', $request->file('logo')->getClientOriginalName())
            ]);
        }

        //gedung
        if (empty($request->file('gedung'))) {
            $validate = lowongan::FindOrFail($id);
            $validate->update([
                'namalowongan' => $request->namalowongan,
                'jenispekerjaan' => $request->jenispekerjaan,
                'tingkatjabatan' => $request->tingkatjabatan,
                'gajipekerjaan' => $request->gajipekerjaan,
                'spesialis' => $request->spesialis,
                'pengalaman' => $request->pengalaman,
                'deskripsipekerjaan' => $request->deskripsipekerjaan,
                'pendidikan' => $request->pendidikan,
                'alamatperusahaan' => $request->alamatperusahaan


            ]);
        } else {
            $validate = lowongan::FindOrFail($id);
            Storage::delete($validate->gedung);
            $validate->update([
                'namalowongan' => $request->namalowongan,
                'jenispekerjaan' => $request->jenispekerjaan,
                'tingkatjabatan' => $request->tingkatjabatan,
                'gajipekerjaan' => $request->gajipekerjaan,
                'spesialis' => $request->spesialis,
                'pengalaman' => $request->pengalaman,
                'deskripsipekerjaan' => $request->deskripsipekerjaan,
                'pendidikan' => $request->pendidikan,
                'alamatperusahaan' => $request->alamatperusahaan,
                'gedung' => $request->file('gedung')->move('img/uploads/lowongan/', $request->file('gedung')->getClientOriginalName())
            ]);
        }

        return redirect()->route('lowongan.index')->with('success', 'Data lowongan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $validate = lowongan::FindOrFail($id);
        Storage::delete([
            $validate->logo,
            $validate->gedung
        ]);

        $validate->delete();
        return back()->with('toast_success', 'Data lowongan berhasil dihapus');
    }
}
