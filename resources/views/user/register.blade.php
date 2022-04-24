@extends('navfoot.main')

@section('title', 'Register Gojob')
@section('content')

    <section id="form">
      <form method="POST" action="">
        <div class="container mt-6">
          <div class="row">
            <div class="col-lg-5">
              <img src="/img/image_register.png" alt="img" class="img-fluid p-6 m-6">
            </div>
              <div class="col-lg-7 p-6">
                <div class="container mt-4 ps-5 p-5 shadow m-auto" style="background-color:#021668 ;width:auto;">
                  <h4 class="text-center mb-4 fw-bold " style="color: #ffff;">REGISTER</h4>

            <div class="d-flex justify-content-between ps-6 pe-6">
                <div class="form-group mb-4 ps-3 pe-3">
                <input type="text" name="first_name" class="form-control" id="floatingInput" placeholder="First name" style="color: #021668; background-color: #f1f1f1" />
              </div>
              <div class="form-group mb-4 ps-3 pe-3">
                <input type="text" name="last_name" class="form-control" id="floatingInput" placeholder="Last name" style="color: #021668; background-color: #f1f1f1" />
              </div>
            </div>

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
                <p style="text-align: center; color: #ffff;">Don’t have an account? <a href="" style="font-weight: bold;">Register!</a></p>
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