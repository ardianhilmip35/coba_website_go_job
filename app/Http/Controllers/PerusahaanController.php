<?php

namespace App\Http\Controllers;

use App\Models\perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perusahaan()
    {
        return view('admin.profil_perusahaan.profil');
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
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(perusahaan $perusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function edit(perusahaan $perusahaan)
    {
        return view('admin.profil_perusahaan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perusahaan $perusahaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(perusahaan $perusahaan)
    {
        //
    }
}
