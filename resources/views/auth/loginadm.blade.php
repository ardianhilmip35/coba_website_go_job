@extends('layouts.navadm1')

@section('title', 'Login Admin')
@section('content')
    <section id="form" style=" margin-top: 100px; margin-left: 50px; margin-right: 50px; ">
        <form method="POST" action="{{ route('login') }}">
            @csrf
                {{-- <div class="col-lg-6 pt-3 ">
                    <div class="container-fluid mt-2 p-4" style="background-color:#ffff ;width:auto;">
                        
                    </div>
                </div> --}}

                <div class="row py-4 ">
                    <div class="col-md-6">
                        <img src="/img/login.png"  class="img-fluid">
                    </div>

                    <div class="col-md-6">
                        <div class="container bg-light shadow rounded mt-3">
                            <div class="pt-4 fw-bold fs-3 pb-4 text-center">
                                <img src="/img/logo tok 1.png" alt="" class="text-center pb-3 img-fluid" width="85">
                                <h4 class="text-center fw-bold" style="color: #021668;">Please Login Your Account</h4>
                            </div>
                            
                            {{-- EMAIL --}}
                            <div class="form-group px-4 pt-2">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" style="border: 1px solid #021668; background-color: #f1f1f1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
    
                            {{-- PASSWORD --}}
                            <div class="form-group pt-3 px-4">
                                <input id="password-field1" type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" style="border: 1px solid #021668; background-color: #f1f1f1" required autocomplete="current-password"/>
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="d-flex fs-6 pt-3 px-4 pb-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                                <label class="form-check-label ps-2" for="exampleCheck1">Show Password</label>
                                <div class="ms-auto">
                                    @if (Route::has('password.request'))
                                        <a  href="{{ route('password.request') }}" style="color: #021668;">{{ 'Forgot Password?' }}</a>
                                    @endif
                                </div>
                            </div>

                            <div class="text-center px-4 pt-2">
                                <button class="btn" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login">Login</button>
                            </div>

                            <div class="text-center px-4 pt-2 pb-4">
                                <span>
                                    Create your account <a href="{{ route('register') }}" style="color: #021668;">here</a>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
        </form>

        <script>
            function myFunction() {
              var x = document.getElementById("password-field1");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
          </script>
    </section>
    
@endsection


