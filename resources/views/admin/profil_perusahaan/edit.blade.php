@extends('layouts.navadm2')

@section('title', 'Profil Perusahaan')
@section('content')   
<section id="form" style="margin-top: 100px; margin-left: 50px; margin-right: 50px; margin-bottom: 80px;">

    {{-- Judul --}}
    <div class="row-lg-12">
        <h2 class="pb-2 border-bottom border-4" style="color: #000;"><b>Edit Profil Perusahaan</b></h2>
    </div>

    {{-- Form Edit --}}
    <div class="row-lg-12 py-4 px-4 mt-5" style="background-color: #D7E9F7;;">
        <form action="{{ route('user-profile-infomartion.update') }}" method="POST">
            @csrf
            @method('PUT')

            {{-- SLIDE PERTAMA --}}
            <div class="form-step form-step-active mt-2">

                {{-- Nama Admin --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="nama_admin" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Nama Admin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('nama_admin') is-invalid @enderror" id="nama_admin" placeholder="Masukkan Nama Admin" style="background-color: #fff" required>
                        
                        @error('nama_admin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Nama Perusahaan --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="nama_perusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Nama Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" placeholder="Masukkan Nama Perusahaan" style="background-color: #fff" required>
                    
                        @error('nama_perusahaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Deskripsi Perusahaan --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="deskripsi_perusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Deskripsi Perusahaan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('nama_perusahaan') is-invalid @enderror" aria-label="With textarea" id="deskripsiperusahaan" placeholder="Masukkan Deskripsi Perusahaan" style="background-color: #fff" required></textarea>
                    </div>
                </div>

                {{-- Telepon Perusahaan --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="telp_perusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Telepon Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('telp_perusahaan') is-invalid @enderror" id="telp_perusahaan" placeholder="Masukkan Telepon Perusahaan" style="background-color: #fff">
                    </div>
                </div>

                {{-- Button --}}
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <a href="#" style="text-decoration: none; color:#fff; background-color: #C81F1F;" class="fw-bold pe-6 align-self-center px-2 text-center py-2 rounded me-2 btn-next">Selanjutnya</a>
                        <button type="submit" class="btn fw-bold" style="background-color:#F1F1F1; border: 1px solid #000;">Simpan</button>
                    </div>
                </div>

            </div>
            {{-- AKHIR SLIDE PERTAMA --}}


            {{-- SLIDE KEDUA --}}
            <div class="form-step mt-2">

                {{-- Alamat Perusahaan --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="alamat_perusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-start" style="background-color: #F1F1F1; border: 1px solid #000;">Alamat Perusahaan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('alamat_perusahaan') is-invalid @enderror" aria-label="With textarea" id="alamat_perusahaan" placeholder="Masukkan Alamat Perusahaan" style="background-color: #fff"></textarea>
                    </div>
                </div>

                {{-- Website Perusahaan --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;"> 
                    <label for="websiteperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Website Perusahaan </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="websiteperusahaan" placeholder="Masukkan Website Perusahaan " style="background-color: #fff">
                    </div>
                </div>

                {{-- LOGO PERUSAHAAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="logo" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Logo Perusahaan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="logo">
                    </div>
                </div>

                {{-- GEDUNG PERUSAHAAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 50px;">
                    <label for="gedung" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Gedung Perusahaan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="gedung">
                    </div>
                </div>


                {{-- Button --}}
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <a href="#" style="text-decoration: none; color:#fff; background-color: #C81F1F;" class="fw-bold pe-6 align-self-center px-2 text-center py-2 rounded me-2 btn-prev">Sebelumnya</a>
                        <button type="submit" class="btn fw-bold" style="background-color:#F1F1F1; border: 1px solid #000;">Simpan</button>
                    </div>
                </div>
                
            </div>
            {{-- AKHIR SLIDE KEDUA    --}}
            <script src="/script.js" defer></script>
        </form>
    </div>
</section>
@endsection