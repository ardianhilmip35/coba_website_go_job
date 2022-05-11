@extends('navfoot.main')

@section('title', 'Login Gojob')
@section('content')
<section id="form" style=" margin-top: 100px; margin-left: 50px; margin-right: 50px; margin-bottom: 50px;">
      <form method="POST" action="#">
        <div class="container mt-6">
          <div class="row">
            <div class="col-lg-7">
              <img src="/img/image_login.png" alt="img" class="img-fluid p-6 m-6">
            </div>
              <div class="col-lg-5 p-6">
                <div class="container mt-4 ps-5 p-5 shadow m-auto" style="background-color:#ffff ;width:auto; border-radius:10px;">
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
                <button class="btn" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="sign in google"><img src="/img/google.png" alt="" width="20px">   Sign In With Google
                </button>
              </div>
              <div class="d-flex justify-content-center">
                <p style="font-size: 12px; color: #021668;">Very easy and fast. We will not upload anything without your permission</p>
              </div>
                <p style="text-align: center; color: #021668;">Don’t have an account? <a href="/user/register1" style="font-weight: bold;">Register!</a></p>
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