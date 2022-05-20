@extends('layouts.navadm2')
@section('title', 'Profil Perusahaan')
@section('content')   
<section id="form" style="margin-top: 100px; margin-left: 50px; margin-right: 50px; margin-bottom: 80px;">
    
    {{-- Judul --}}
    <div class="row-lg-12">
        <h2 class="pb-2 border-bottom border-4" style="color: #000;"><b>Profil Perusahaan</b></h2>
    </div>

    
        {{-- Halaman 1 --}}
        <div class="info-step info-step-active">
            {{-- Menu --}} 
            <div class="row-lg-12 mb-3">
                <div class="col-sm-12 d-flex justify-content-start">
                    <p style="text-decoration: none; color:#000;">Informasi Perusahaan</p>
                    <a href="#" style="text-decoration: none; color:#000;" class="ms-4 infomenu2">Informasi Tambahan Perusahaan</a>
                </div>
            </div>

            {{-- Informasi 1 --}}
            <div class="row-lg-12 shadow d-flex pb-5" style="background-color: #fff; color:#000;">
                <div class="ps-5 pt-5 me-auto">
                    <h5 class="fw-bold">Nama Admin</h5>
                    <p class="pt-1" style="color: #9F9F9F">-- Kosong --</p>
                    <h5 class="pt-3 fw-bold">Nama Perusahaan</h5>
                    <p class="pt-1" style="color: #9F9F9F">-- Kosong --</p>
                    <h5 class="pt-3 fw-bold">Deskripsi Perusahaan</h5>
                    <p class="pt-1" style="color: #9F9F9F">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                        into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including 
                        versions of Lorem Ipsum.</p>
                </div>
                <a href="/edit" class="ms-auto  pe-5 pt-5"><i class="fa-solid fa-pen-to-square fa-2xl"></i></a>
            </div>
        </div>

        {{-- Halaman 2 --}}
        <div class="info-step">
            {{-- Menu --}} 
            <div class="row-lg-12 mb-3">
                <div class="col-sm-12 d-flex justify-content-start">
                    <a href="#" style="text-decoration: none; color:#000;" class="infomenu1">Informasi Perusahaan</a>
                    <p style="text-decoration: none; color:#000;" class="ms-4">Informasi Tambahan Perusahaan</p>
                </div>
            </div>

            {{-- Informasi 2 --}}
            <div class="row-lg-12 shadow d-flex pb-5" style="background-color: #fff; color:#000;">
                <div class="ps-5 pt-5 me-auto">
                    <h5 class="fw-bold">Telepon Perusahaan</h5>
                    <p class="pt-1" style="color: #9F9F9F">-- Kosong --</p>
                    <h5 class="pt-3 fw-bold">Alamat Perusahaan</h5>
                    <p class="pt-1" style="color: #9F9F9F">-- Kosong --</p>
                    <h5 class="pt-3 fw-bold">Website Perusahaan</h5>
                    <p class="pt-1" style="color: #9F9F9F">-- Kosong --</p>
                    <h5 class="pt-3 fw-bold">Email Perusahaan</h5>
                    <p class="pt-1" style="color: #9F9F9F">-- Kosong --</p>
                    <h5 class="pt-3 fw-bold">Logo Perusahaan</h5>
                    <img src="/img/LOGO TOK 1.png" alt="" width="150">
                </div>
            </div>
        </div>


    <script src="/profil.js" defer></script>
</section>
@endsection