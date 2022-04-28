@extends('navfoot.navadm2')

@section('title', 'Iklan Lowongan')
@section('content')    
    <section style="width:100%; position: relative;">
        <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="container d-flex justify-content-between shadow rounded" style="background-color: #fff;">
                    <p class="fs-5 me-auto pt-3 ps-3">Iklan Lowongan</p>
                    <a href="#" class="text-decoration-none text-dark menulowo" style="padding-top: 19px;">Lowongan yang ditayangkan</a>
                    <a href="#" class="text-decoration-none text-dark menulowo" style="padding-top: 19px;">Draf Tersimpan</a>
                    <button type="button" class="btn btn-warning btn-sm fs-6 me-3" style="margin-top:12px; margin-bottom: 12px">Buat Iklan Lowongan</button>
                </div>
            </div>

            <div class="row mt-4">
                <div class="container d-flex justify-content-between shadow-sm rounded" style="background-color: #fff;">   
                    <div class="col">
                        <p class="me-auto pt-3 ps-3 fw-bold"  style="font-size:20px;">Nama Lowongan</p>   
                        <p class="me-auto ps-3" style="margin-top: -12px; font-size:15px">Terakhir diperbarui 5 April 2022 at 8:58 AM</p>
                        <div class="d-flex justify-content-start ps-3  pb-2">
                            <button type="button" class="btn btn-success btn-sm fs-6 me-3" style="margin-top:12px; margin-bottom: 12px">Ubah</button>
                            <button type="button" class="btn btn-danger btn-sm fs-6 me-3" style="margin-top:12px; margin-bottom: 12px">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection