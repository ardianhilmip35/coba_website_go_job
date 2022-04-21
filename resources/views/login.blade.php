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
      <form method="POST" action="">
        <div class="container mt-6">
          <div class="row">
            <div class="col-lg-6">
              <img src="/img/image_login.png" alt="img" class="img-fluid p-6 m-6">
            </div>
              <div class="col-lg-6 p-6">
              <div class="container mt-4 p-4 shadow" style="background-color:#ffff ;">
              <h3 class="text-center mb-3 fw-bold" style="color: #021668;">Please Login Your Account</h3>
              <div class="form-floating mb-4">
                <input type="email" name="user" class="form-control" id="floatingInput" placeholder="email" style="border: 3px solid #021668; background-color: #f1f1f1" />
                <label for="floatingInput" style="padding-left: 50px; color: #000">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" style="border: 3px solid #021668; background-color: #f1f1f1" />
                <label for="floatingPassword" style="padding-left: 50px; color: #000">Password</label>
              </div>
              <div class="d-flex justify-content-between">
              <div class="form-check" style="padding-left: 35px;">
                <input class="form-check-input" style="border: 3px solid #021668;" type="checkbox" value="" id="flexCheckChecked" name="remember"/>
                <label class="form-check-label" style="color: #021668;" for="flexCheckChecked"> Remember Me </label>
              </div>
              <div class="">
                <a href="#" style="color: #021668;">Forgot Password?</a>
              </div>
              </div>
                <button class="btn mt-4" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login">Login</button>
                <button class="btn mt-4" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login">Sign In With Google
              <img src="/img/google.com" alt="">
                </button>
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