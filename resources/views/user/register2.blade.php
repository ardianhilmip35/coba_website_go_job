@extends('navfoot.main')

 <!-- Navbar -->
 <!-- <nav class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color: #021668">
      <div class="container-fluid">
        <img src="/img/LOGO TOK 1.png" alt="" width="75px" class="d-inline-block align-text-top pe-3 ps-2 mb-1" />
        <div class="navbar-nav me-auto">
          <ul class="navbar-nav">
              <a class="nav-link" aria-current="page" href="#" style="text-decoration: none; font-size: 30px; margin-left: ; color: #fff; font-weight: bold; letter-spacing: 1px">Go Job</a>
            <li class="nav-item">
                <a class="nav-link" style="text-decoration: none; font-size: 20px; margin-left: 25px; margin-top: 10px; color: #fff; font-weight: normal; letter-spacing: 1px">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="text-decoration: none; font-size: 20px; margin-left: 20px; margin-top: 10px; 5px; color: #fff; font-weight: normal; letter-spacing: 1px">Profil Perusahaan</a>
            </ul>
            <li class="nav-item">
                <a class="nav-link" href="#" style="text-decoration: none; font-size: 20px; margin-left: 500px; margin-top: 10px; 5px; color: #fff; font-weight: normal; letter-spacing: 1px">Masuk</a>
            </ul>
            <li class="nav-item">
                <a class="nav-link" style="text-decoration: none; font-size: 20px; margin-left: 3px; margin-top: 10px; 5px; color: #fff; font-weight: normal; letter-spacing: 1px">|</a>
            </ul>
            <li class="nav-item">
                <a class="nav-link" style="text-decoration: none; font-size: 20px; margin-left: 3px; margin-top: 10px; 5px; color: #fff; font-weight: normal; letter-spacing: 1px">Mendaftar</a>
            </ul>
            <li class="nav-item">
                <a class="nav-link" style=" background:white; text-decoration: none; font-size: 20px; margin-left: 3px; margin-top: 10px; 5px; color: black; font-weight: bold; letter-spacing: 1px">Untuk Perusahaan</a>
            </ul>
        </div>
      </div>
    </nav> -->
    <!-- Akhir Navbar -->

    <!-- Login-->
    @section('content')

    <section id="form">
      <form method="POST" action="" class="mt-4" style="border: 4px solid #021668; border: radius 25px;">
          <div class="row">
              <div class="col-lg-12">
                <div class="container  p-2 shadow m-auto" style="background-color:#021668 ;width:auto;">
                  <h4 class="text-center mb-4 fw-bold " style="color: #ffff;">Isikan Pengalaman Kerjamu</h4>
                  <h5 class="text-center mb-4" style="color: #ffff;">Find Your job With Go Job</h5>
                </div>
            <div class="container px-5 py-3  m-auto" style="width:auto;">

            <div class="row px-3">
                <div class=" container border col-lg-5 col-sm-9 px-3 py-2 text-center" style="background-color:#D7E9F7">
                Memiliki Pengalaman Kerja
                </div>
                <div class="container col-lg-2 col-sm-9 px-3 py-2 text-center" style="color: #021668;">
                    <Strong>Atau</Strong>
                </div>
                <div class="container col-lg-5 col-sm-9 px-3 py-2 text-center" style="border: 3px solid #021668;">
                Mahasiswa/Baru Lulus
                </div>
            </div>
            </div>
            
            <div class="row mt-3">
                <div class="container col-lg-5 ms-4">
                    <div class="form-group mb-4 ps-4 pe-1">
                    <label for="floatingInput" style="color: #000;">Pernah Bekerja Di</label>
                    <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Pengalaman Bekerja" style="color: #021668; background-color: #f1f1f1" />
                    </div>
                </div>
                <div class="container col-lg-5 me-4">
                    <div class="form-group mb-4 ps-1 pe-4">
                    <label for="floatingInput" style="color: #000;">Pernah Bekerja Di</label>
                    <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Pengalaman Bekerja" style="color: #021668; background-color: #f1f1f1" />
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="container col-lg-5 ms-4">
                    <div class="form-group mb-4 ps-4 pe-1">
                    <label for="floatingInput" style="color: #000;">Pernah Bekerja Di</label>
                    <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Pengalaman Bekerja" style="color: #021668; background-color: #f1f1f1" />
                    </div>
                </div>
                <div class="container col-lg-5 me-4">
                    <div class="form-group mb-4 ps-1 pe-4">
                    <label for="floatingInput" style="color: #000;">Pernah Bekerja Di</label>
                    <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Pengalaman Bekerja" style="color: #021668; background-color: #f1f1f1" />
                    </div>
                </div>
            </div>


            <div class="container px-5 py-3  m-auto" style="width:auto;">
              <div class="form-group mb-4 ps-3 pe-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" style="color: #021668; background-color: #f1f1f1" />
              </div>

              <div class="form-group mb-4 ps-3 pe-3">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" style="color: #021668; background-color: #f1f1f1" />
              </div>

              <div class="form-group mb-3 ps-3 pe-3">
                <input type="password" name="confirm_pass" class="form-control" id="floatingPassword" placeholder="Konfirmasi Password" style="color: #021668; background-color: #f1f1f1" />
              </div>

              <div class="d-flex justify-content-between ps-3 pe-3 mb-4">
              <div class="form-check" style="">
                <input class="form-check-input" style="color: #021668;" type="checkbox" value="" id="flexCheckChecked" name="remember"/>
                <label class="form-check-label" style="color: #ffff;" for="flexCheckChecked">I Agree</label>
              </div>
              </div>
              
              <div class="container ps-3 pe-3 m-auto">
                <div class="d-flex justify-content-center mb-4">
                  <button class="btn" style="background-color: #D7E9F7; color:#000000; width:100%" type="submit" name="register">Register</button>
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