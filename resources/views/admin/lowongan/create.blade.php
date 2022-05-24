@extends('layouts.navadm2')

@section('title', 'Tambah Lowongan')
@section('content') 
    <section style=" margin-top: 130px; margin-left: 100px; margin-right: 100px; margin-bottom: 120px; background-color: #D7E9F7; border-radius: 10px; padding: 30px;">
            
        <form action="{{ '/lowongan' }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input id="users_id" name="users_id" value="{{ Auth::user()->id }}" style="background-color: #D7E9F7; color:#D7E9F7; border:#D7E9F7; " required>
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
                        <input type="text" class="form-control" id="namalowongan" name="namalowongan" value="{{ old('namalowongan') }}" placeholder="Masukkan Nama Lowongan" style="background-color: #fff" required>
                    </div>
                </div>
                
                {{-- JENIS PEKERJAAN --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="jenispekerjaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Jenis Pekerjaan</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Jenis Lowongan" style="background-color:#fff;" id="jenispekerjaan" name="jenispekerjaan" required>
                            <option selected>Pilih Jenis Lowongan</option>
                            <option value="Penuh">Penuh</option>
                            <option value="Paruh Waktu">Paruh Waktu</option>
                            <option value="Kontrak">Kontrak</option>
                            <option value="Magang">Magang</option>
                        </select>
                    </div>
                </div>

                {{-- KATEGORI JABATAN --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="tingkatjabatan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Tingkat Jabatan</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Jabatan" style="background-color:#fff;" id="tingkatjabatan" name="tingkatjabatan" required>
                            <option selected>Pilih Jabatan</option>
                            <option value="CEO/Direktur/Manajer Senior">CEO/Direktur/Manajer Senior</option>
                            <option value="Asisten Manajer">Asisten Manajer</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Pegawai">Pegawai</option>
                            <option value="Lulusan Baru/Pengalaman Kurang dari 1 tahun">Lulusan Baru/Pengalaman Kurang dari 1 tahun</option>
                        </select>
                    </div>
                </div>

                {{-- GAJI KERJA --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="gajipekerjaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Anggaran Pekerjaan</label>
                    <div class="col-sm-7 d-flex justify-content-start">
                        <input type="text" class="form-control" id="gajipekerjaan" name="gajipekerjaan" value="{{ old('gajipekerjaan') }}" placeholder="Masukkan Anggaran Gaji" style="background-color: #fff" required>
                    </div>
                </div>

                {{-- SPESIALIS --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 50px;">
                    <label for="spesialis" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Spesialis Pekerjaan</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Spesialis" name="spesialis" style="background-color:#fff;" id="spesialis" required>
                            <option selected>Pilih Spesialis Pekerjaan</option>
                            <option value="Arsitek">Arsitek</option>
                            <option value="Biomedis">Biomedis</option>
                            <option value="Bioteknologi">Bioteknologi</option>
                            <option value="Staff Admin">Staff Admin</option>
                            <option value="Customer Service">Customer Service</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="E-commerce">E-commerce</option>
                            <option value="Mobile Developer">Mobile Developer</option>
                            <option value="Sistem Analis">Sistem Analis</option>
                            <option value="Web Developer">Web Developer</option>
                        </select>
                    </div>
                </div>

                {{-- Button --}}
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <a href="#" style="text-decoration: none; color:#fff; background-color: #C81F1F;" class="fw-bold pe-6 align-self-center px-2 text-center py-2 rounded me-2 btn-next">Selanjutnya</a>
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
                        <select class="form-select" placeholder="Pilih Spesialis" style="background-color:#fff;" id="pengalaman" name="pengalaman" required>
                            <option selected>Pilih Pengalaman Kerja</option>
                            <option value="Tidak ada">Tidak ada</option>
                            <option value="1 Tahun">1 Tahun</option>
                            <option value="2 Tahun">2 Tahun</option>
                            <option value="3 Tahun">3 Tahun</option>
                            <option value="4 Tahun">4 Tahun</option>
                            <option value="5 Tahun">5 Tahun</option>
                            <option value="6 Tahun">6 Tahun</option>
                            <option value="7 Tahun">7 Tahun</option>
                            <option value="8 Tahun">8 Tahun</option>
                            <option value="9 Tahun">9 Tahun</option>
                            <option value="10 Tahun">10 Tahun</option>
                        </select>
                    </div>
                </div>

                {{-- DESKRIPSI PEKERJAAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="deskripsipekerjaan" class="text-center fw-bold col-sm-2 col-form-label align-self-start" style="background-color: #F1F1F1; border: 1px solid #000;">Deskripsi Pekerjaan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" id="deskripsipekerjaan" name="deskripsipekerjaan" value="{{ old('deskripsipekerjaan') }}" placeholder="Isi Deskripsi Pekerjaan" style="background-color: #fff" required></textarea>
                    </div>
                </div>

                {{-- NAMA PERUSAHAAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;"> 
                    <label for="namaperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Nama Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namaperusahaan" name="namaperusahaan" value="{{ old('namaperusahaan') }}" placeholder="Masukkan Nama Perusahaan" style="background-color: #fff" required>
                    </div>
                </div>

                {{-- DEKRIPSI SINGKAT --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 50px;">
                    <label for="deskripsiperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-start" style="background-color: #F1F1F1; border: 1px solid #000;">Deskripsi Perusahaan</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" id="deskripsiperusahaan" name="deskripsiperusahaan" value="{{ old('deskripsiperusahaan') }}" placeholder="Isi Deskripsi Perusahaan" style="background-color: #fff" required></textarea>
                    </div>
                </div>

                {{-- Button --}}
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <a href="#" style="text-decoration: none; color:#fff; background-color: #C81F1F;" class="fw-bold pe-6 align-self-center px-2 text-center py-2 rounded me-2 btn-prev">Sebelumnya</a>
                        <a href="#" style="text-decoration: none; color:#fff;" class="fw-bold pe-6 align-self-center px-2 text-center py-2 rounded ms-2 bg-success btn-next">Selanjutnya</a>
                    </div>
                </div>
            </div>
            {{-- AKHIR SLIDE KEDUA --}}


            {{-- SLIDE KETIGA --}}
            <div class="form-step mt-2">

                {{-- TINGKAT PENDIDIKAN --}}
                <div class="row" style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="pendidikan" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Tingkat Pendidikan</label>
                    <div class="col-sm-10">
                        <select class="form-select" placeholder="Pilih Tingkat Pendidikan" style="background-color:#fff;" id="pendidikan" name="pendidikan">
                            <option selected>Pilih Tingkat Pendidikan</option>
                            <option value="SMA">SMA</option>
                            <option value="DIPLOMA/SARJANA">DIPLOMA/SARJANA</option>
                            <option value="PASCA SARJANA">PASCA SARJANA</option>
                            <option value="DOKTOR">DOKTOR</option>
                        </select>
                    </div>
                </div>

                {{-- ALAMAT KANTOR --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="alamatperusahaan" class="text-center fw-bold col-sm-2 col-form-label align-self-start" style="background-color: #F1F1F1; border: 1px solid #000;">Lokasi Kerja</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" id="alamatperusahaan" name="alamatperusahaan" value="{{ old('alamatperusahaan') }}" placeholder="Masukkan Lokasi Kerja" style="background-color: #fff" required></textarea>
                    </div>
                </div>

                {{-- LOGO PERUSAHAAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 40px;">
                    <label for="logo" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Logo Perusahaan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="logo" name="logo" required>
                    </div>
                </div>

                {{-- GEDUNG PERUSAHAAN --}}
                <div class="row " style="padding-left: 10px; margin-bottom: 50px;">
                    <label for="gedung" class="text-center fw-bold col-sm-2 col-form-label align-self-center" style="background-color: #F1F1F1; border: 1px solid #000;">Gedung Perusahaan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="gedung" name="gedung" required>
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
        <!-- Script -->
        <script src="/script.js" defer></script>
    </section>
@endsection