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
            <div class="col-lg-7">
              <img src="/img/image_login.png" alt="img" class="img-fluid p-6 m-6">
            </div>
              <div class="col-lg-5 p-6">
                <div class="container mt-4 ps-5 p-5 shadow m-auto" style="background-color:#ffff ;width:auto;">
                  <h4 class="text-center mb-4 " style="color: #021668;">Please Login Your Account</h4>
              <div class="form-group mb-3 ps-3 pe-3">
                <!-- <label for="floatingInput" style="padding-left: 40px; color: #000;">Email</label> -->
                <input type="email" name="user" class="form-control" id="floatingInput" placeholder="Email" style="border: 3px solid #021668; background-color: #f1f1f1" />
              </div>
              <div class="form-group mb-2 ps-3 pe-3">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" style="border: 3px solid #021668; background-color: #f1f1f1" />
                <!-- <label for="floatingPassword" style="padding-left: 40px; color: #000">Password</label> -->
              </div>
              <div class="d-flex justify-content-between ps-3 pe-3">
              <div class="form-check" style="padding-left: 25px;">
                <input class="form-check-input" style="border: 2px solid #021668;" type="checkbox" value="" id="flexCheckChecked" name="remember"/>
                <label class="form-check-label" style="color: #021668;" for="flexCheckChecked">Remember Me </label>
              </div>
              <div class="">
                <a href="#" style="color: #021668;">Forgot Password?</a>
              </div>
              </div>
              <div class="container ps-3 pe-3 m-auto">
                <div class="d-flex justify-content-center">
                  <button class="btn mt-3" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login">Login</button>
                </div>
                <p class="mt-3" style="text-align: center; color: #021668;">Or</p>
                <div class="d-flex justify-content-center">
                <button class="btn" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login"><img src="/img/google.png" alt="" width="20px">   Sign In With Google
                </button>
              </div>
              <div class="d-flex justify-content-center">
                <p style="font-size: 12px; color: #021668;">Very easy and fast. We will not upload anything without your permission</p>
              </div>
                <p style="text-align: center; color: #021668;">Don’t have an account? <a href="" style="font-weight: bold;">Register!</a></p>
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