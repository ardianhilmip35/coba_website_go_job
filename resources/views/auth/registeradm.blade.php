@extends('layouts.navadm1')

@section('title', 'Register Admin')
@section('content')
    <section id="form" style=" margin-top: 100px; margin-left: 50px; margin-right: 50px; margin-bottom: -50px;">
        <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row py-4">
                    <div class="col-md-6">
                        <img src="/img/register2.png"  class="img-fluid" style="margin-top: -20px">
                    </div>

                    <div class="col-md-6">
                        <div class="container bg-light shadow-lg rounded mt-3">

                            <div class="pt-4 fw-bold fs-3 pb-4 text-center">
                                <h4 class="text-center fw-bold" style="color: #021668;">Please Create Your Account</h4>
                            </div>

                            {{-- SLIDE PERTAMA --}}
                            <div class="form-step form-step-active">

                                <div class="form-group mb-2 px-4 pt-2">
                                    <p class="namaformreg">Nama Lengkap</p>
                                    <input type="text" name="nama_admin" class="form-control @error('nama_admin') is-invalid @enderror" value="{{ old('nama_admin') }}" id="nama_admin" placeholder="Masukkan nama anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('nama_admin')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
    
                                {{-- Perusahaan --}}
                                <div class="form-group mb-2 px-4 pt-2">
                                    <p class="namaformreg">Nama Perusahaan</p>
                                    <input type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" value="{{ old('nama_perusahaan') }}" id="nama_perusahaan" placeholder="Masukkan nama bisnis anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('nama_perusahaan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
    
                                {{-- Telepon --}}
                                <div class="form-group mb-2 px-4 pt-2">
                                    <p class="namaformreg">Nomor Telepon</p>
                                    <input type="text" name="telp_perusahaan" class="form-control @error('telp_perusahaan') is-invalid @enderror" value="{{ old('telp_perusahaan') }}" id="telp_perusahaan" placeholder="Masukkan nomor telpon anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('telp_perusahaan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>
    
                                {{-- Alamat --}}
                                <div class="form-group mb-2 px-4 pt-2 pb-4">
                                    <p class="namaformreg">Alamat Kantor</p>
                                    <input type="text" name="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror" value="{{ old('alamat_perusahaan') }}" id="alamat_perusahaan" placeholder="Masukkan alamat kantor anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('alamat_perusahaan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>

                                {{-- Button --}}
                                <div class="row pb-4 pe-1">
                                    <div class="col-sm-12 d-flex justify-content-end pe-4">
                                        <a href="#" style="text-decoration: none; color:#fff;" class="fw-bold pe-6 align-self-center px-2 text-center py-2 rounded me-2 btn-next bg-success">Selanjutnya</a>
                                    </div>
                                </div>

                            </div>
                            {{-- AKHIR SLIDE PERTAMA --}}

                            {{-- SLIDE KEDUA --}}
                            <div class="form-step">

                                {{-- Email --}}
                                <div class="form-group mb-2 px-4 pt-2">
                                    <p class="namaformreg">Email</p>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Masukkan email anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    @error('email')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div class="form-group mb-2 px-4 pt-2">
                                    <p class="namaformreg">Password</p>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" placeholder="Masukkan password anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye show-hide" style=" float: right;
                                    margin-left: -27px;
                                    margin-top: -27px;
                                    position: relative;
                                    padding-right:30px;
                                    z-index: 2;" onclick="myFunction()"></span>
                                    @error('password')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>

                                {{-- Konfirmasi Password --}}
                                <div class="form-group mb-2 px-4 pt-2 pb-4">
                                    <p class="namaformreg">Konfirmasi Password</p>
                                    <input type="password" name="konfirmasipassword" class="form-control @error('konfirmasipassword') is-invalid @enderror" 
                                    id="konfirmasipassword" placeholder="Konfirmasi password anda" style="border: 1px solid #021668; background-color: #f1f1f1" required/>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye show-hide" style=" float: right;
                                    margin-left: -27px;
                                    margin-top: -27px;
                                    position: relative;
                                    padding-right:30px;
                                    z-index: 2;" onclick="myFunction2()"></span>
                                        @error('konfirmasipassword')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>    
                                    @enderror
                                </div>


                                {{-- Button --}}
                                <div class="row pe-1 pt-2" style="padding-left: 7px">
                                    <div class="col-sm-12 d-flex justify-content-between pe-4">
                                        <a href="#" style="text-decoration: none; color:#fff; " class="fw-bold pe-6 align-self-center px-2 text-center py-2 ms-3 rounded btn-prev bg-danger">Sebelumnya</a>
                                        <button class="btn fw-bold fs-6 me-2 ms-3" style="background-color: #021668; color:#ffff; width:75%" type="submit" name="register" id="btnSubmit">Register</button>
                                    </div>
                                </div>

                                <div class="text-center px-4 pt-3 pb-5">
                                    <span>
                                        Log in With your account <a href="{{ route('login') }}" style="color: #021668;">here</a>
                                    </span>
                                </div>
                                
                            </div>
                            {{-- AKHIR SLIDE KEDUA    --}}
                        </div>
                    </div>
                </div>
        </form>

        <script src="/script.js" defer></script>
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
        <script>
            function myFunction2() {
                var x = document.getElementById("konfirmasipassword");
                if (x.type === "password") {
                x.type = "text";
                } else {
                x.type = "password";
                }
            }
        </script>
    
        <script>
            function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
                }
        </script>
    </section>
@endsection