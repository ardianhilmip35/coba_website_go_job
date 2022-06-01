@extends('layouts.main')

@section('title', 'Login Gojob')
@section('content')
<section id="form" style=" margin-top: 100px; margin-left: 50px; margin-right: 50px; margin-bottom: 50px;">
      <form method="POST" action="{{ route('userlogin') }}">

      @csrf
            <div class="row py-4 ">
              <div class="col-md-7">
                <img src="/img/login.png"  class="img-fluid" width="650">
              </div>
              <div class="col-md-5">
                <div class="container bg-light shadow rounded">
                  <h4 class="text-center pt-5 fw-bold fs-3 pb-4" style="color: #021668;">Please Login Your Account</h4>

                  {{-- email --}}
                  <div class="input-group px-4 pt-3">
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="floatingInput" placeholder="Email" style="border: 2px solid #021668; background-color: #f1f1f1" />
                  </div>

                  {{-- password --}}
                  <div class="form-group pt-3 px-4 pb-4">
                    <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="myInput" placeholder="Password" style="border: 2px solid #021668; background-color: #f1f1f1" />
                    
                    <div class="d-flex fs-6 pt-2">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                      <label class="form-check-label ps-2" for="exampleCheck1">Show Password</label>
                      <div class="ms-auto">
                        <a href="#" style="color: #021668; text-decoration:none;">Forgot Password?</a>
                      </div>
                    </div>
                  </div>

                  <div class="text-center px-4 pt-2">
                      <button class="btn" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login">Login</button>
                  </div>
                  <div class="text-center py-2">
                    <span style="color: #021668;">Or</span>
                  </div>
                  <div class="text-center px-4">
                    <button class="btn" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="google"><img src="/img/google.png" alt="" width="30px" class="pe-2"> Sign In With Google</button>
                  </div>
                  <div class="d-flex justify-content-start px-4 pt-2 pb-2">
                    <p style="font-size: 12px; color: #021668;">Very easy and fast. We will not upload anything without your permission</p>
                </div>
              </div>
            </div>
    </form>

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
>
</body>
</html>