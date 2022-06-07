@extends('layouts.navadm1')

@section('title', 'Reset Gojob')
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ request()->token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="margin-top: 10px">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="margin-top: 10px">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="margin-top: 10px">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="margin-top: 10px">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="margin-top: 10px">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <section id="form" style=" margin-top: 120px; margin-left: 90px; margin-right: 90px; margin-bottom: 20px;">
        <div class="row py-4" style="background-color: #fff;">
                <div class="col-md-5 pt-4 pb-1 ps-4">
                    <img src="/img/reset1.png"  class="img-fluid offset-md-2" width="700">
                </div>

                <div class="col-md-6 ps-4">
                    <div class="pt-3 text-start offset-md-2">
                        <h2 class="fw-bold" style="color: #021668;">RESET PASSWORD</h2>
                        <p style="color: #021668; letter-spacing: 1px;" class="fs-5" >Reset your new password</p>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success offset-md-2" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ request()->token }}">

                        <div class="form-floating offset-md-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus >
                                <label for="floatingInput">{{ __('E-Mail Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        
                        </div>

                        <div class="form-floating offset-md-2 mt-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="margin-top: 5px">
                                <label for="floatingInput">{{ __('Password') }}</label>
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

                        <div class="form-floating offset-md-2 mt-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label for="floatingInput">{{ __('Confirm Password') }}</label>
                            <span toggle="#password-field" class="fa fa-fw fa-eye show-hide" style=" float: right;
                                    margin-left: -27px;
                                    margin-top: -27px;
                                    position: relative;
                                    padding-right:30px;
                                    z-index: 2;" onclick="myFunction2()"></span>
                        </div>
                        
                        <div class="form-group mt-3 pb-2">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary" style="margin-top: 10px">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>

        <script>
            function myFunction2() {
                var x = document.getElementById("password-confirm");
                if (x.type === "password") {
                x.type = "text";
                } else {
                x.type = "password";
                }
            }
        </script>
    
        <script>
            function myFunction() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
                }
        </script>
    </section>
@endsection