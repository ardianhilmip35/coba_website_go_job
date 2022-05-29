@extends('layouts.navadm1')

@section('title', 'Register Admin')
@section('content')
    <section id="form" >
        <form method="POST" action="{{ route('register') }}" class="d-flex justify-content-center p-3">
                @csrf
                <div class="col-lg-10 pt-3">
                    <div class="container-fluid mt-2 p-4 shadow m-auto rounded" style="background-color:#ffff ; width:auto;">
                        <img src="/img/logofull.png" alt="" width="160" class="mb-4 rounded mx-auto d-block">
                        <hr size="4" color="#000000" width=”500″  style="border: 2px solid black">
                        <div class="row">
                            <div class="col">

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
                                    @error('nama_perusahaan')
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
                                    @enderror
                                </div>
                                
                            </div>

                            
                            <div class="col">

                                {{-- Email --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Email</p>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Masukkan email anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div class="input-group mb-2 ps-1">
                                    <p class="namaformreg">Password</p>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" placeholder="Masukkan password anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    <div class="input-group-prepend">
                                        <button class="btn rounded-end btn-outline-primary" type="button">
                                            <h6 toggle="#password" class="fa fa-eye fa-lg show-hide"></h6>
                                        </button>
                                    </div>
                                    @error('password')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>

                                {{-- Konfirmasi Password --}}
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Konfirmasi Password</p>
                                    <input type="password" name="konfirmasipassword" class="form-control @error('konfirmasipassword') is-invalid @enderror" 
                                        id="konfirmasipassword" placeholder="Konfirmasi password anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    <div class="input-group-prepend">
                                        <button class="btn rounded-end btn-outline-primary" type="button">
                                            <h6 toggle="#konfirmasipassword" class="fa fa-eye fa-lg show-hide"></h6>
                                        </button>
                                    </div>
                                    @error('konfirmasipassword')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="container px-1 m-auto mt-4">
                            <div class="d-flex justify-content-center">
                                <button class="btn fw-bold fs-5" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="register" id="btnSubmit">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#btnSubmit").click(function () {
                    var password = $("#password").val();
                    var confirmPassword = $("#konfirmasipassword").val();
                    if (password != confirmPassword) {
                        alert("Passwords anda tidak sama, coba ulangi lagi!");
                        return false;
                    }
                    return true;
                });
            });
        </script>
    </section>
@endsection