@extends('navfoot.navadm2')

@section('title', 'Profil Perusahaan')
@section('content')   
<section id="form">

    <h2 class="pb-2 border-bottom" style="font-size: 30px; margin-top: 100px; color: #021668;"><b>Edit Profil Perusahaan</b></h2>
            <a class="nav-link"  style="color: #021668;" aria-current="page" href="#"><b>Informasi Perusahaan</b></a>
     
  <div class="container" style="width: 160%;">
      <div class="row" style="margin-top: -2%;">
          <div class="container-fluid mt-4 p-6 shadow" style="background-color:#ffff; width: 110%; height: 450px; margin-bottom: 30px">
            <div style="color: #021668;">
                <label style="font-size: 15px; margin-top: 10px; margin-left: 10px"><b>Apa nama profil Anda?</b></label><br>
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Admin" style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Apa nama perusahaan anda?</b></label><br>
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Admin" style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Apa industri perusahaan Anda?</b></label><br>
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Admin" style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
                <label class="mt-4" style="font-size: 15px; margin-left: 10px" ><b>Tentang Perusahan</b></label><br>
                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Admin" style="color: #021668; background-color: #f1f1f1; width: 300px; margin-left: 7px" />
            </div>
        </div>
      </div>
   </div>
</section>
@endsection