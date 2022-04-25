@extends('navfoot.main2')
    @section('content')
    <section id="form">
        <h2 class="pb-2 border-bottom " style="font-size: 30px; margin-top: 100px; color: #021668;"><b>Profil Perusahan</b></h2>
            <ul class="d-flex list-unstyled">
              <li>
                <a class="nav-link active"  style="color: #021668;" aria-current="page" href="#">Informasi Perusahaan</a>
              </li>
              <li>
                <a class="nav-link"  style="color: #021668;" aria-current="page" href="#"><b>Informasi Tambahan Perusahaan</b></a>
              </li>
            </ul>
      <div class="container">
          <div class="row" style="margin-top: -2%;">
              <div class="container-fluid mt-4 p-6 shadow" style="background-color:#ffff; width: 100%; height: 450px; margin-bottom: 30px">
                <div style="color: #021668;">
                    <ul class="d-flex list-unstyled">
                    <li><label style="font-size: 15px;"><b>Nomor Registrasi</b></label><br></li>
                    <a href="#"><li style="margin-left: 86%"><i class="fas fa-edit fa-2x"></i></a><br></li>
                    </ul>
                    <label class="" style="font-size: 15px; margin-top: -23px">Dibuat : </label><br>
                    <label class="mt-4" style="font-size: 15px;"><b>Alamat Perusahaan</b></label><br>
                    <label class="mt-1" style="font-size: 15px;">Go Job </label><br>
                    <label class="mt-4" style="font-size: 15px;"><b>Nomor Telephone</b></label><br>
                    <label class="mt-1" style="font-size: 15px;">087784666329</label><br>
                    <label class="mt-4" style="font-size: 15px;"><b>Website</b></label><br>
                    <a href="http://127.0.0.1:8000/profilperusahaan2"><label class="mt-1" style="font-size: 15px;">http://127.0.0.1:8000/profilperusahaan2</label></a><br>
                    <label class="mt-4" style="font-size: 15px;"><b>Jam Kerja</b></label><br>
                    <label class="mt-1" style="font-size: 15px;">Senin - Jumat</label>
                </div>
            </div>
          </div>
       </div>
    </section>
@endsection
</body>
</html>