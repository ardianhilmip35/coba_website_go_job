@extends('layouts.navadm2')

@section('title', 'Profil Perusahaan')
@section('content')   
<section id="form" style="margin-top: 100px; margin-left: 50px; margin-right: 50px; margin-bottom: 80px;">
    {{-- <h2 class="pb-2 border-bottom" style="font-size: 30px; margin-top: 100px; color: #021668;"><b>Edit Profil Perusahaan</b></h2>
        <a class="nav-link"  style="color: #021668;" aria-current="page" href="#"><b>Informasi Perusahaan</b></a>
     
    <div class="container" style="width: 160%;">
        <div class="row" style="margin-top: -2%;">
            <div class="container-fluid mt-4 p-6 shadow" style="background-color:#ffff; width: 110%; height: 450px; margin-bottom: 30px">
                <div style="color: #021668;">
                    <label style="font-size: 15px; margin-top: 10px; margin-left: 10px"><b>Apa nama profil Anda?</b></label><br>
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Admin" style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                    <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Apa nama perusahaan anda?</b></label><br>
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="PT Alfaria Trijaya Tbk." style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                    <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Apa industri perusahaan Anda?</b></label><br>
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Toko" style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                    <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Tentang Perusahan</b></label><br>
                        <textarea class="form-control" rows="4" style="font-size: 15px; margin-left: 10px; width: 90%" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."></textarea>
                </div>
            </div>
        </div>
        <button type="button" value="" class="btn btn-primary" style="width: 10%; margin-left: 78%; background-color: #1E3163;  color: white; margin-bottom: 10px; margin-top: -15px">
            <b>Simpan</b></button>
        <button type="button" value="" class="btn btn-primary" style="width: 10%; margin-left: 90%; background-color: #1E3163;  color: white; margin-bottom: 10px; margin-top: -78px">
            <b>Batal</b></button>
    </div> --}}

    {{-- Judul --}}
    <div class="row-lg-12">
        <h2 class="pb-2 border-bottom border-4" style="color: #000;"><b>Edit Profil Perusahaan</b></h2>
    </div>

    {{-- Form Edit --}}
    <div class="row-lg-12 py-4 px-4 mt-5" style="background-color: #D7E9F7;;">
        <form action="" method="post">


            {{-- SLIDE PERTAMA --}}
            <div class="form-step form-step-active mt-2">

                {{-- Nama Admin --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="namaadmin" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Nama Admin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namaadmin" placeholder="Masukkan Nama Admin" style="background-color: #fff" required>
                    </div>
                </div>

                {{-- Nama Perusahaan --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="namaperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Nama Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namaperusahaan" placeholder="Masukkan Nama Perusahaan" style="background-color: #fff" required>
                    </div>
                </div>

                {{-- Deskripsi Perusahaan --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="deskripsiperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Deskripsi Perusahaan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" id="deskripsiperusahaan" placeholder="Masukkan Deskripsi Perusahaan" style="background-color: #fff" required></textarea>
                    </div>
                </div>

                {{-- Telepon Perusahaan --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="teleponperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Telepon Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="teleponperusahaan" placeholder="Masukkan Telepon Perusahaan" style="background-color: #fff">
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
                    <label for="alamatperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-start" style="background-color: #F1F1F1; border: 1px solid #000;">Alamat Perusahaan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" id="alamatperusahaan" placeholder="Masukkan Alamat Perusahaan" style="background-color: #fff"></textarea>
                    </div>
                </div>

                {{-- Website Perusahaan --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;"> 
                    <label for="websiteperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Website Perusahaan </label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="websiteperusahaan" placeholder="Masukkan Website Perusahaan " style="background-color: #fff">
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