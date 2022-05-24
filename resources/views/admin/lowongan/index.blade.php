@extends('layouts.navadm2')

@section('title', 'Iklan Lowongan')
@section('content')    
    <section style=" margin-top: 135px; margin-left: 50px; margin-right: 50px; margin-bottom: 120px;">
            <div class="row">
                <div class="container d-flex justify-content-between shadow rounded" style="background-color: #fff;">
                    <p class="fs-5 me-auto pt-3 ps-3">Iklan Lowongan</p>
                    <a href="#" class="text-decoration-none text-dark menulowo" style="padding-top: 19px;">Lowongan yang ditayangkan</a>
                    <a href="#" class="text-decoration-none text-dark menulowo" style="padding-top: 19px;">Draf Tersimpan</a>
                    <a href="{{ url('lowongan/create') }}"><button type="button" class="btn btn-warning btn-sm fs-6 me-3" style="margin-top:12px; margin-bottom: 12px">Buat Iklan Lowongan</button></a>
                </div>
            </div>

            @if ($lowongan->count() > 0)
                @foreach ($lowongan as $iklan)
                    <div class="row mt-4 mb-2">
                        <div class="container d-flex justify-content-between shadow-sm rounded" style="background-color: #fff;">   
                            <div class="col">
                                <p class="me-auto pt-3 ps-3 fw-bold"  style="font-size:20px;">{{ $iklan->namalowongan }}</p>   
                                <p class="me-auto ps-3" style="margin-top: -12px; font-size:15px">Terakhir diperbarui {{ $iklan->created_at }}</p>
                                <div class="d-flex justify-content-start ps-3  pb-2">
                                    <a href="{{ url('lowongan/' . $iklan->id . '/edit') }}"><button type="button" class="btn btn-success btn-sm fs-6 me-3" style="margin-top:12px; margin-bottom: 12px">Ubah</button></a>
                                    <a  href="lowongan/delete/{{ $iklan->id }}"><button type="button" class="btn btn-danger btn-sm fs-6 me-3" style="margin-top:12px; margin-bottom: 12px" data-id-lowongan="{{ $iklan->id }}">Hapus</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="row mt-5 mb-2">
                    <div class="container-fluid" style="margin-top: 100px; margin:50;">
                        <h4 class="text-center">Belum ada data yang ditambahkan</h4>
                    </div>
                </div>
            @endif
            

    </section>
@endsection