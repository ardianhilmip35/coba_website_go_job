@extends('navfoot.navadm2')

@section('title', 'Tambah Lowongan')
@section('content') 
    <section style="width:100%; position: relative;">
        <div class="container ps-4 pt-4 pb-4 rounded-3" style="margin-top: 120px; background-color: #D7E9F7;">
            <form action="#" class="form">
                <h5 class="fw-bold">Tambah data Lowongan</h5>
                <p>Isi data lowongan dengan lengkap dan jelas untuk diiklankan</p>
                
            {{-- PROGRESS BAR --}}
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                
                <div
                  class="progress-step progress-step-active"
                  data-title="Detail"
                ></div>
                <div class="progress-step" data-title="Lanjutan"></div>
                <div class="progress-step" data-title="Penyelesaian"></div>
              </div>

            {{-- SLIDE PERTAMA --}}
            <div class="form-step form-step-active mt-2">

                {{-- NAMA LOWONGAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="namalowongan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Nama Lowongan</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="namalowongan" placeholder="Masukkan Nama Lowongan" style="background-color: #fff">
                    </div>
                </div>

                {{-- JENIS PEKERJAAN --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="jenispekerjaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Jenis Pekerjaan</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Jenis Lowongan" style="background-color:#fff;" id="jenispekerjaan">
                            <option selected>Pilih Jenis Lowongan</option>
                            <option value="1">Penuh</option>
                            <option value="2">Paruh Waktu</option>
                            <option value="3">Kontrak</option>
                            <option value="4">Magang</option>
                        </select>
                    </div>
                </div>

                {{-- TINGKAT JABATAN --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="tingkatjabatan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Tingkat Jabatan</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Jabatan" style="background-color:#fff;" id="tingkatjabatan">
                            <option selected>Pilih Jabatan</option>
                            <option value="1">CEO/Direktu/Manajer Senior</option>
                            <option value="2">Asisten Manajer</option>
                            <option value="3">Supervisor</option>
                            <option value="4">Pegawai</option>
                            <option value="5">Lulusan Baru/Pengalaman Kurang dari 1 tahun</option>
                        </select>
                    </div>
                </div>

                {{-- GAJI KERJA --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="gajipekerjaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Anggaran Pekerjaan</label>
                    <div class="col-sm-7 d-flex justify-content-start">
                        <input type="text" class="form-control" id="gajipekerjaan" placeholder="Minimal" style="background-color: #fff">
                        <h5 class="ps-2 pe-2 align-self-center">sampai</h5>
                        <input type="text" class="form-control" id="gajipekerjaan" placeholder="Maksimal" style="background-color: #fff">
                    </div>
                </div>

                {{-- SPESIALIS --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 50px;">
                    <label for="spesialis" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Spesialis Pekerjaan</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Spesialis" style="background-color:#fff;" id="spesialis">
                            <option selected>Pilih Spesialis Pekerjaan</option>
                            <option value="1">Arsitek</option>
                            <option value="2">Biomedis</option>
                            <option value="3">Bioteknologi</option>
                            <option value="4">Staf Admin</option>
                            <option value="5">Customer Service</option>
                            <option value="6">Digital Marketing</option>
                            <option value="7">E-commerce</option>
                            <option value="8">Mobile Developer</option>
                            <option value="9">Sistem Analis</option>
                            <option value="10">Web Developer</option>
                        </select>
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

                {{-- PENGALAMAN KERJA --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="pengalaman" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Pengalaman Kerja</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Spesialis" style="background-color:#fff;" id="pengalaman">
                            <option selected>Pilih Pengalaman Kerja</option>
                            <option value="1">Tidak ada</option>
                            <option value="2">1 tahun</option>
                            <option value="3">2 tahun</option>
                            <option value="4">3 tahun</option>
                            <option value="5">4 tahun</option>
                            <option value="6">5 tahun</option>
                            <option value="7">Lebih dari 5 tahun</option>
                        </select>
                    </div>
                </div>

                {{-- DESKRIPSI PEKERJAAAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="deskripsipekerjaan" class="text-center fw-bold col-sm-2 col-form-label align-self-start" style="background-color: #F1F1F1; border: 1px solid #000;">Deskripsi Pekerjaan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" id="deskripsipekerjaan" placeholder="Isi Deskripsi Pekerjaan" style="background-color: #fff"></textarea>
                    </div>
                </div>

                {{-- NAMA PERUSAHAAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;"> 
                    <label for="namaperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Nama Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" id="namaperusahaan" placeholder="Masukkan Nama Perusahaan" style="background-color: #fff">
                    </div>
                </div>

                {{-- DEKRIPSI SINGKAT --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 50px;">
                    <label for="deskripsiperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-start" style="background-color: #F1F1F1; border: 1px solid #000;">Deskripsi Perusahaan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" id="deskripsiperusahaan" placeholder="Isi Deskripsi Perusahaan" style="background-color: #fff"></textarea>
                    </div>
                </div>

                {{-- Button --}}
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <a href="#" style="text-decoration: none; color:#fff; background-color: #C81F1F;" class="fw-bold pe-6 align-self-center px-2 text-center py-2 rounded me-2 btn-prev">Sebelumnya</a>
                        <button type="submit" class="btn fw-bold" style="background-color:#F1F1F1; border: 1px solid #000;">Simpan</button>
                        <a href="#" style="text-decoration: none; color:#fff;" class="fw-bold pe-6 align-self-center px-2 text-center py-2 rounded ms-2 bg-success btn-next">Selanjutnya</a>
                    </div>
                </div>

            </div>
            {{-- AKHIR SLIDE KEDUA --}}

            {{-- SLIDE KETIGA --}}
            <div class="form-step mt-2">

                {{-- TINGKAT PENDIDIKAN --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="tingkatpendidikan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Tingkat Pendidikan</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Tingkat Pendidikan" style="background-color:#fff;" id="tingkatpendidikan">
                            <option selected>Pilih Tingkat Pendidikan</option>
                            <option value="1">SMA</option>
                            <option value="2">DIPLOMA</option>
                            <option value="3">GELAR SARJANA</option>
                            <option value="4">GELAR PASCA SARJANA</option>
                            <option value="5">GELAR DOKTOR</option>
                        </select>
                    </div>
                </div>

                {{-- ALAMAT KANTOR --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="alamat" class="text-center fw-bold col-sm-2 col-form-label align-self-start" style="background-color: #F1F1F1; border: 1px solid #000;">Lokasi Kerja</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" id="alamat" placeholder="Masukkan Lokasi Kerja" style="background-color: #fff"></textarea>
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
            {{-- AKHIR SLIDE KETIGA    --}}

            </form>
        </div>
    </section>
@endsection