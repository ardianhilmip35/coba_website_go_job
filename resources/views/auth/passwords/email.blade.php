@extends('layouts.navadm1')

@section('title', 'Reset Password Gojob')

@section('content')
    <section id="form" style=" margin-top: 120px; margin-left: 90px; margin-right: 90px; margin-bottom: 20px;">
        <div class="row py-4" style="background-color: #fff;">
                <div class="col-md-5 pt-4 pb-1 ps-4">
                    <img src="/img/reset1.png"  class="img-fluid offset-md-2" width="700">
                </div>

                <div class="col-md-6 ps-4">
                    <div class="pt-4 pb-4 text-start offset-md-2">
                        <h2 class="fw-bold" style="color: #021668;">RESET PASSWORD</h2>
                        <p style="color: #021668; letter-spacing: 1px;" class="fs-5" >Please enter your email address below</p>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success offset-md-2" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group offset-md-2">
                            <label for="email" class="col-form-label fw-bold">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Input your email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                        </div>
                        
                        <div class="form-group mt-3 pb-2">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        
                        <span class="offset-md-2">Back to <a href="{{ route('login') }}">login</a></span>
                    </form>
                </div>
        </div>

    </section>
@endsection