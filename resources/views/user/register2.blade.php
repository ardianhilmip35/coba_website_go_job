@extends('navfoot.main')

    @section('content')

    <section id="form">
      <form method="POST" action="" class="mt-4" style=" background-color:#ffff ;border: 4px solid #021668; border: radius 25px;">
          <div class="row">
              <div class="col-lg-12 mb-4">
                <div class="container-fluid p-2 shadow m-auto" style="background-color:#021668 ;width:auto;">
                  <h4 class="text-center mb-4 fw-bold " style="color: #ffff;">Isikan Pengalaman Kerjamu</h4>
                  <h5 class="text-center mb-4" style="color: #ffff;">Find Your job With Go Job</h5>
                </div>
            <div class="container-fluid px-5 py-3 px-4  m-auto" style="width:auto;">

            <div class="row px-3 mt-3">
                <div class=" container border col-lg-5 col-sm-9 px-3 py-2 text-center" style="background-color:#D7E9F7">
                  <a href="/user/register2"><Strong>Memiliki Pengalaman Kerja</Strong></a>
                
                </div>
                <div class="container col-lg-2 col-sm-9 px-3 py-2 text-center" style="color: #021668;">
                    <Strong>Atau</Strong>
                </div>
                <div class="container col-lg-5 col-sm-9 px-3 py-2 text-center" style="border: 3px solid #021668;">
                  <a href="/user/register3"><Strong>Mahasiswa/Baru Lulus</Strong></a>
                
                </div>
            </div>
            </div>

            <div class="row mt-3 ">
                <div class="col">
                    <div class="form-group mb-3 px-3">
                        <label for="floatingInput1" style="color: #000;">Pernah Bekerja Di</label>
                        <input type="text" name="Pernah Bekerja Di" class="form-control" id="floatingInput1" placeholder="Pengalaman Bekerja" style="border: 1px solid #021668; color: #021668; background-color: #f1f1f1" />
                    </div>
                    <div class="form-group mb-3 px-3">
                        <label for="floatingInput2" style="color: #000;">Posisi</label>
                        <input type="text" name="Posisi" class="form-control" id="floatingInput2" placeholder="Bekerja Sebagai" style="border: 1px solid #021668; color: #021668; background-color: #f1f1f1" />
                    </div>
                    <div class="form-group mb-3 px-3">
                        <label for="floatingInput3" style="color: #000;">Perusahaan</label>
                  <input type="text" name="Perusahaan" class="form-control" id="floatingInput3" placeholder="Nama perusahaan sebelumnya" style="border: 1px solid #021668; color: #021668; background-color: #f1f1f1" />
                    </div>
                    <div class="form-group mb-3 px-3">
                        <label for="floatingInput4" style="color: #000;">Berhenti Kerja</label>
                    <input type="date" name="Perusahaan" class="form-control" id="floatingInput4" placeholder="Nama perusahaan sebelumnya" style="border: 1px solid #021668; color: #021668; background-color: #f1f1f1" />
                    </div>
                    
                </div>
                <div class="col">
                    <div class="form-group mb-3 px-3">
                        <label for="floatingInput5" style="color: #000;">Spesialis Anda</label>
                        <input type="text" name="Spesialis Anda" class="form-control" id="floatingInput5" placeholder="Spesifikasi" style="border: 1px solid #021668; color: #021668; background-color: #f1f1f1" />
                    </div>
                    <div class="form-group mb-3 px-3">
                        <label for="floatingInput6" style="color: #000;">Alamat</label>
                        <input type="text" name="Alamat" class="form-control" id="floatingInput6" placeholder="Masukkan domisili anda" style="border: 1px solid #021668; color: #021668; background-color: #f1f1f1" />
                    </div>
                    <div class="form-group mb-3 px-3">
                        <label for="floatingInput7" style="color: #000;">Lokasi Kerja Yang Diinginkan</label>
                        <input type="text" name="Lokasi" class="form-control" id="floatingInput7" placeholder="Tempat kerja yang diinginkan" style="border: 1px solid #021668; color: #021668; background-color: #f1f1f1" />
                    </div>
                    <div class="form-group mb-3 px-3">
                        <label for="floatingInput8" style="color: #000;">Ekspektasi Yang Diinginkan</label>
                        <input type="text" name="gaji" class="form-control" id="floatingInput8" placeholder="Ekspektasi gaji" style="border: 1px solid #021668; color: #021668; background-color: #f1f1f1" />
                    </div>
                    
                </div>
            </div>
            
          <div class="container-fluid px-5 m-auto mb-3 mt-4">
            <div class="d-flex justify-content-center">
                <button class="btn fw-bold fs-5" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="simpan">SIMPAN</button>
            </div>
          </div>


              
            </div>
          </div>
       </div>
    </form>
    </section>
    @endsection
    <!-- Akhir Login -->
    
    <!-- footer -->
    <!-- <footer class="text-center text-white" style="background-color: #021668">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead">Produced by Newbie Team. Since @2022 <span style="color: #021668">Go Job</span></p>
                </div>
            </div>
        </div> -->
    <!-- Copyright -->
    <!-- </footer> -->
    
    <!-- Copyright -->
        <!-- akhir footer -->
</body>
</html>