@extends('navfoot.navadm1')

@section('title', 'Register Admin')
@section('content')
    <section id="form">
        <form action="POST" action="">
            <div class="container d-flex justify-content-center p-3" style="margin-top: 5rem; margin-bottom: 2rem;">
                <div class="col-lg-10 pt-3">
                    <div class="container mt-2 p-4 shadow m-auto rounded" style="background-color:#ffff ; width:auto;">
                        <img src="/img/logofull.png" alt="" width="160" class="mb-4 rounded mx-auto d-block">
                        <hr size="4" color="#000000" width=”500″  style="border: 2px solid black">
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nama Lengkap</p>
                                    <input type="name" name="name" class="form-control" id="floatingInput" placeholder="Masukkan nama anda" style="border: 1px solid #021668; background-color: #f1f1f1" />
                                </div>
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nama Bisnis</p>
                                    <input type="name" name="bisnis" class="form-control" id="floatingInput" placeholder="Masukkan nama bisnis anda" style="border: 1px solid #021668; background-color: #f1f1f1" />
                                </div>
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Nomor Telepon</p>
                                    <input type="name" name="telp" class="form-control" id="floatingInput" placeholder="Masukkan nomor telpon anda" style="border: 1px solid #021668; background-color: #f1f1f1" />
                                </div>
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Alamat Kantor</p>
                                    <input type="name" name="alamat" class="form-control" id="floatingInput" placeholder="Masukkan alamat kantor anda" style="border: 1px solid #021668; background-color: #f1f1f1" />
                                </div>
                                
                            </div>
                            <div class="col">
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Email</p>
                                    <input type="email" name="user" class="form-control" id="floatingInput" placeholder="Masukkan email anda" style="border: 1px solid #021668; background-color: #f1f1f1" />
                                </div>
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Password</p>
                                    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Masukkan password anda" style="border: 1px solid #021668; background-color: #f1f1f1" />
                                </div>
                                <div class="form-group mb-2 px-1">
                                    <p class="namaformreg">Konfirmasi Password</p>
                                    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Konfirmasi password anda" style="border: 1px solid #021668; background-color: #f1f1f1" />
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
            </div>
        </form>
    </section>
@endsection