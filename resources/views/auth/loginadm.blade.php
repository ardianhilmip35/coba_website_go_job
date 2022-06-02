@extends('layouts.navadm1')

@section('title', 'Login Admin')
@section('content')
    <section id="form">
        <form method="POST" action="{{ route('login') }}" class="d-flex justify-content-center p-3">
            @csrf
                <div class="col-lg-6 pt-3 ">
                    <div class="container-fluid mt-2 p-4" style="background-color:#ffff ;width:auto;">
                        <img src="/img/logofull.png" alt="" width="230" class="mb-4 rounded mx-auto d-block">
                        <h4 class="text-center pb-3 fw-bold" style="color: #021668;">Please Login Your Account</h4>
                        
                        {{-- EMAIL --}}
                        <div class="form-group mb-3 px-1">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" style="border: 1px solid #021668; background-color: #f1f1f1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        {{-- PASSWORD --}}
                        <div class="form-group mb-3 px-1">
                            <input id="password-field1" type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" style="border: 1px solid #021668; background-color: #f1f1f1" required autocomplete="current-password"/>
                            {{-- <div class="input-group-prepend">
                                <button class="btn rounded-end btn-outline-primary" type="button">
                                    <h6 toggle="#password-field1" class="fa fa-eye fa-lg show-hide"></h6>
                                </button>
                            </div> --}}
                            <span toggle="#password-field" class="fa fa-fw fa-eye show-hide" style=" float: right;
                                    margin-left: -27px;
                                    margin-top: -27px;
                                    position: relative;
                                    padding-right:30px;
                                    z-index: 2;" onclick="myFunction()"></span>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="container px-1 mx-auto mt-4">
                            <div class="d-flex justify-content-center">
                                <button class="btn fw-bold fs-5" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login">Login</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-1">
                            @if (Route::has('password.request'))
                                <div class="">
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #021668;">{{ 'Forgot Password?' }}</a>
                                </div>
                            @endif
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


