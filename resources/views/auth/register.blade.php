@extends('layouts.main')

@section('title', 'Register Gojob')
@section('content')

    <section id="form" style=" margin-top: 100px; margin-left: 50px; margin-right: 50px; margin-bottom: 50px;">
      <form method="POST" action="{{ route('userregister') }}">
      @csrf
      <div class="row py-2">
        <div class="row py-4 ">
          <div class="col-md-7">
            <img src="/img/register2.png"  class="img-fluid" width="700" style="margin-top: -20px">
          </div>
          <div class="col-md-5">
            <div class="container bg-light shadow rounded">
              <h4 class="text-center pt-5 fw-bold fs-3 pb-4" style="color: #021668;">Please Register Your Account</h4>

              {{-- nama --}}
              <div class="input-group px-4 pt-3">
                <input type="text" name="first_name" value="{{ old('nama_pelamar') }}" class="form-control me-2" id="floatingInput" placeholder="First name" style="border: 2px solid #021668; color: #021668; background-color: #f1f1f1" />
                <input type="text" name="last_name" value="{{ old('nama_pelamar') }}" class="form-control" id="floatingInput" placeholder="Last name" style="border: 2px solid #021668; color: #021668; background-color: #f1f1f1" />
              </div>

              {{-- email --}}
              <div class="input-group px-4 pt-3">
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="floatingInput" placeholder="Email" style="border: 2px solid #021668; background-color: #f1f1f1" />
              </div>

              {{-- password --}}
              <div class="form-group pt-3 px-4">
                <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="myInput" placeholder="Password" style="border: 2px solid #021668; background-color: #f1f1f1" />
                <span toggle="#password-field" class="fa fa-fw fa-eye show-hide" style=" float: right;
                margin-left: -27px;
                margin-top: -27px;
                position: relative;
                padding-right:30px;
                z-index: 2;" onclick="myFunction()"></span>
              </div>

              {{-- Konfirmasi Password --}}
              <div class="form-group pt-3 px-4 pb-4">
                <input type="password" name="confirm_pass" value="{{ old('password') }}" class="form-control" id="myInput2" placeholder="Konfirmasi Password" style="border: 2px solid #021668; background-color: #f1f1f1" />
                <span toggle="#password-field" class="fa fa-fw fa-eye show-hide" style=" float: right;
                margin-left: -27px;
                margin-top: -27px;
                position: relative;
                padding-right:30px;
                z-index: 2;" onclick="myFunction2()"></span>
              </div>

              <div class="text-center px-4 pt-2">
                  <button class="btn" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login">Register</button>
              </div>
              <div class="text-center py-2">
                <span style="color: #021668;">Or</span>
              </div>
              <div class="text-center px-4">
                <button class="btn" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="google"><img src="/img/google.png" alt="" width="30px" class="pe-2"> Sign Up With Google</button>
              </div>
              <div class="d-flex justify-content-start px-4 pt-2 pb-2">
                <p style="font-size: 12px; color: #021668;">Very easy and fast. We will not upload anything without your permission</p>
            </div>
          </div>
        </div>
      </div>
    </form>

      <script>
        function myFunction2() {
          var x = document.getElementById("myInput2");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>

      <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>

    </section>
    @endsection
</body>
</html>