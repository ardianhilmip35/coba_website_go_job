@extends('layouts.main2')

@section('title', 'Profil Pelamar')
@section('content')
<section> 
    <link rel="stylesheet" href="style.css">
    <div class="container-background" style="margin-top:7rem;">
      <div class="row">
      <div class="col-md-6">
        <div class="container-profil">
          <img src="img/account.png" style="margin-left: 15px;" width="60px" height="60px" id="profil" alt="">
          <div class="row g-1" >  
          <p class="namaprofil" style="text-align: center; font-size: 20px; margin: auto;">Galuh</p>
            <a href="" style="text-align: center; text-decoration: none; color: #9F9F9F;">Lihat Profil Saya</a>
          </div>
        </div>
      </div>

      <div  class="col-md-6">
        <div class="container-saran" style="padding : 20px">
          <div class="col" style="padding: 10px;">
            <p style="font-size: 20px;">Untuk Meningkatkan kesempatan Anda dipilih Perusahaan, silahkan melengkapi:</p>
            <img src="img/play.png " width="15px" alt="">
            <a href="" style="text-decoration: none; color: #021668;">Keterampilan,
              <a href="" style="text-decoration: none; color: #021668;">Pengalaman</a>
            </a>
          </div>
          </div>
      </div>

      <div class="col-md-6">
        <div class="container-item">
          <div class="row" id="rowitem" style="font-size: 20px;
          margin-left: 3px;">
            <button class="btnpengalaman" id="btnitem" style="height: 50px; width: 300px; background-color: transparent; border: none; text-align: left;">
              <img src="img/briefcase.png" width="30px" height="30px" alt="">
            Pengalaman</button>
            <button class="btnpendidikan" id="btnitem" style="height: 50px; width: 300px; background-color: transparent; border: none; text-align: left;">
              <img src="img/hat.png" width="30px" height="30px" alt="">
            Pendidikan</button>
            <button class="btnketerampilan" id="btnitem" style="height: 50px; width: 300px; background-color: transparent; border: none; text-align: left;">
              <img src="img/idea.png" width="30px" height="30px" alt="">
            Keterampilan</button>
            <button class="btnbahasa" id="btnitem" style="height: 50px; width: 300px; background-color: transparent; border: none; text-align: left;">
              <img src="img/global.png" width="30px" height="30px" alt="">
            Bahasa</button>
            <button class="btnprofil" id="btnitem" style="height: 50px; width: 300px; background-color: transparent; border: none; text-align: left;">
              <img src="img/user.png" width="30px" height="30px" alt="">
            Profil Saya</button>
            <button class="btnpengaturan" id="btnitem" style="height: 50px; width: 300px; background-color: transparent; border: none; text-align: left;">
              <img src="img/settings.png" width="30px" height="30px" alt="">
            Pengaturan Privasi</button>
          </div>
        </div>
        </div>
        
        <div class="col-md-6">
          <div class="container-detail">
            <div class="imageprofil" style="display: flex;">
              <img src="img/user.png" width="50px" height="50px" alt="">
              <p style="font-size: 30px; margin-left: 20px;">Profil Saya</p>
              <button style="margin-left: 5px; border: none; height: 50px; background: transparent;" id="btnitem">
                <img src="img/edit.png" width="30px" height="30px" style="margin-left: 20px;" alt="">
              </button>
            </div>      
            <div class="row " style="margin-top: 20px;">
              <div class="col-md-4">
                  <p style="font-size: 20px;">Nama</p>
              </div>
              <div class="col-md-6">
                  <p style="font-size: 20px;">Galuh</p>
              </div>
              <div class="col-md-4">
                  <p style="font-size: 20px;">Nomor Telepon</p>
              </div>
              <div class="col-md-6">
                  <p style="font-size: 20px;">088215353534</p>
              </div>
              <div class="col-md-4">
                  <p style="font-size: 20px;">Email</p>
              </div>
              <div class="col-md-6">
                  <p style="font-size: 20px;">galuhapriliano@gmail.com</p>
              </div>
              <div class="col-md-4">
                  <p style="font-size: 20px;">Alamat</p>
              </div>
              <div class="col-md-6">
                  <p style="font-size: 20px;">Jawa Timur, Indonesia</p>
              </div>
              <div class="col-md-4">
                  <p style="font-size: 20px;">Warga Negara</p>
              </div>
              <div class="col-md-4">
                  <p style="font-size: 20px;">Indonesia</p>
              </div>
            </div>
          </div>         
        </div>
      </div>
    </div>
    </section>
  @endsection
