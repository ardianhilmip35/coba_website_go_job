@extends('navfoot.main')

    @section('content')

    <section id="form">
      <form method="POST" action="" class="mt-4" style=" background-color:#ffff ;border: 4px solid #021668; border: radius 25px;">
          <div class="row">
              <div class="col-lg-12">
                <div class="container-fluid p-2 shadow m-auto" style="background-color:#021668 ;width:auto;">
                  <h4 class="text-center mb-4 fw-bold " style="color: #ffff;">Isikan Pengalaman Kerjamu</h4>
                  <h5 class="text-center mb-4" style="color: #ffff;">Find Your job With Go Job</h5>
                </div>
            <div class="container-fluid px-5 py-3  m-auto" style="width:auto;">

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
            
            <div class="row mt-3">
                <div class="container col-lg-5 ms-4">
                    <div class="form-group mb-4 ps-4 pe-1">
                    <label for="floatingInput" style="color: #000;">Pernah Bekerja Di</label>
                    <input type="text" name="Pernah Bekerja Di" class="form-control" id="floatingInput" placeholder="Pengalaman Bekerja" style="color: #021668; background-color: #f1f1f1" />
                    </div>
                </div>
                <div class="container col-lg-5 me-4">
                    <div class="form-group mb-4 ps-1 pe-4">
                    <label for="floatingInput" style="color: #000;">Spesialis Anda</label>
                    <input type="text" name="Spesialis Anda" class="form-control" id="floatingInput" placeholder="Spesifikasi" style="color: #021668; background-color: #f1f1f1" />
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="container col-lg-5 ms-4">
                    <div class="form-group mb-4 ps-4 pe-1">
                    <label for="floatingInput" style="color: #000;">Posisi</label>
                    <input type="text" name="Posisi" class="form-control" id="floatingInput" placeholder="Bekerja Sebagai" style="color: #021668; background-color: #f1f1f1" />
                    </div>
                </div>
                <div class="container col-lg-5 me-4">
                    <div class="form-group mb-4 ps-1 pe-4">
                    <label for="floatingInput" style="color: #000;">Alamat</label>
                    <input type="text" name="Alamat" class="form-control" id="floatingInput" placeholder="Masukkan domisili anda" style="color: #021668; background-color: #f1f1f1" />
                    </div>
                </div>
            </div>

            <div class="row mt-2">
              <div class="container col-lg-5 ms-4">
                  <div class="form-group mb-4 ps-4 pe-1">
                  <label for="floatingInput" style="color: #000;">Perusahaan</label>
                  <input type="text" name="Perusahaan" class="form-control" id="floatingInput" placeholder="Nama perusahaan sebelumnya" style="color: #021668; background-color: #f1f1f1" />
                  </div>
              </div>
              <div class="container col-lg-5 me-4">
                  <div class="form-group mb-4 ps-1 pe-4">
                  <label for="floatingInput" style="color: #000;">Lokasi Kerja Yang Diinginkan</label>
                  <input type="text" name="Lokasi" class="form-control" id="floatingInput" placeholder="Tempat kerja yang diinginkan" style="color: #021668; background-color: #f1f1f1" />
                  </div>
              </div>
          </div>

          <div class="row mt-2">
            <div class="container col-lg-5 ms-4">
                <div class="form-group mb-4 ps-4 pe-1">
                <label for="floatingInput" style="color: #000;">Berhenti Kerja</label>
                <input type="date" name="Perusahaan" class="form-control" id="floatingInput" placeholder="Nama perusahaan sebelumnya" style="color: #021668; background-color: #f1f1f1" />
                </div>
            </div>
            <div class="container col-lg-5 me-4">
                <div class="form-group mb-4 ps-1 pe-4">
                <label for="floatingInput" style="color: #000;">Ekspektasi Yang Diinginkan</label>
                <input type="text" name="gaji" class="form-control" id="floatingInput" placeholder="Ekspektasi gaji" style="color: #021668; background-color: #f1f1f1" />
                </div>
            </div>
        </div>


              
              
            </div>
          </div>
       </div>
    </form>
    <div class="container mt-4 mb-4 text-end">
    <button type="button" class="btn btn-sm " style="background-color: #021668; color:#ffff; width: 200px;">SIMPAN</button>
    </div>
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