@extends('layouts.navadm1')

@section('title', 'Register Admin')
@section('content')
    <section id="form" >
<<<<<<< HEAD
        <form method="POST" action="{{ route('register') }}" class="d-flex justify-content-center p-3">
                @csrf
=======
<form method="POST" action="{{ route('register') }}" class="d-flex justify-content-center p-3">
    @csrf
>>>>>>> 1c6faca1f051d35f6e6abf0b86ab3c754b905121
                <div class="col-lg-10 pt-3">
                    <div class="container-fluid mt-2 p-4 shadow m-auto rounded" style="background-color:#ffff ; width:auto;">
                        <img src="/img/logofull.png" alt="" width="160" class="mb-4 rounded mx-auto d-block">
                        <hr size="4" color="#000000" width=”500″  style="border: 2px solid black">
                        <div class="row">
                            <div class="col">

<<<<<<< HEAD
                                {{-- Admin --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nama Lengkap</p>
                                    <input type="text" name="nama_admin" class="form-control @error('nama_admin') is-invalid @enderror" value="{{ old('nama_admin') }}" id="nama_admin" placeholder="Masukkan nama anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('nama_admin')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>

                                {{-- Perusahaan --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nama Perusahaan</p>
                                    <input type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" value="{{ old('nama_perusahaan') }}" id="nama_perusahaan" placeholder="Masukkan nama bisnis anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('nama_perusahaan"')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>

                                {{-- Telepon --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nomor Telepon</p>
                                    <input type="text" name="telp_perusahaan" class="form-control @error('telp_perusahaan') is-invalid @enderror" value="{{ old('telp_perusahaan') }}" id="telp_perusahaan" placeholder="Masukkan nomor telpon anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('telp_perusahaan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>

                                {{-- Alamat --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Alamat Kantor</p>
                                    <input type="text" name="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror" value="{{ old('alamat_perusahaan') }}" id="alamat_perusahaan" placeholder="Masukkan alamat kantor anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('alamat_perusahaan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
=======
                                {{-- Nama Admin --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nama Admin</p>
                                    <input type="text" name="nama_admin" class="form-control @error('nama_admin') is-invalid @enderror" id="nama_admin" placeholder="Masukkan nama anda" style="border: 1px solid #021668; background-color: #f1f1f1" required value="{{ old('nama_admin') }}"/>
                                    @error('nama_admin')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Nama Perusahaan --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nama Perusahaan</p>
                                    <input type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" placeholder="Masukkan nama bisnis anda" style="border: 1px solid #021668; background-color: #f1f1f1" required value="{{ old('nama_perusahaan') }}"/>
                                    @error('nama_perusahaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Nomor Telepon --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nomor Telepon</p>
                                    <input type="text" name="telp_perusahaan" class="form-control @error('telp_perusahaan') is-invalid @enderror" id="telp_perusahaan" placeholder="Masukkan nomor telpon anda" style="border: 1px solid #021668; background-color: #f1f1f1" required value="{{ old('telp_perusahaan') }}"/>
                                    @error('telp_perusahaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Alamat Kantor --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Alamat Kantor</p>
                                    <input type="text" name="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror" id="alamat_perusahaan" placeholder="Masukkan alamat kantor anda" style="border: 1px solid #021668; background-color: #f1f1f1" required value="{{ old('alamat_perusahaan') }}"/>
                                    @error('alamat_perusahaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
>>>>>>> 1c6faca1f051d35f6e6abf0b86ab3c754b905121
                                    @enderror
                                </div>
                                
                            </div>

                            
                            <div class="col">
<<<<<<< HEAD

                                {{-- Email --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Email</p>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Masukkan email anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
=======
                                    
                                {{-- Email --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Email</p>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email anda" style="border: 1px solid #021668; background-color: #f1f1f1" required value="{{ old('email') }}"/>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
>>>>>>> 1c6faca1f051d35f6e6abf0b86ab3c754b905121
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Password</p>
<<<<<<< HEAD
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" placeholder="Masukkan password anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('password')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
=======
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <span id="password" class="form-text">
                                        Must be 8-20 characters long.
                                    </span>
>>>>>>> 1c6faca1f051d35f6e6abf0b86ab3c754b905121
                                </div>

                                {{-- Konfirmasi Password --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Konfirmasi Password</p>
<<<<<<< HEAD
                                    <input type="password" name="konfirmasipassword" class="form-control @error('konfirmasipassword') is-invalid @enderror" id="konfirmasipassword" placeholder="Konfirmasi password anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('konfirmasipassword')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
=======
                                    <input type="password" name="confirmationpassword" class="form-control" id="confirmationpassword" placeholder="Konfirmasi password anda" style="border: 1px solid #021668; background-color: #f1f1f1" />
                                    
>>>>>>> 1c6faca1f051d35f6e6abf0b86ab3c754b905121
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="container px-1 m-auto mt-4">
                            <div class="d-flex justify-content-center">
                                <button class="btn fw-bold fs-5" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="register">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </section>
@endsection