@extends('layouts.login')

@section('title')
    Invisign - Login
@endsection

@section('content')
<section class="login py-5 min-vh-100 ">
    <div class="container login">
        <div class="main-login py-md-2">
            <div class="row align-items-center justify-content-center ">
                <div class="col-md-6 text-center img-main d-none d-md-block">
                    <img src="frontend\images\Prod_All.png" alt="" class="w-100">
                </div>
                <div class="col-md-4 text-center">
                    <div class="card-body body card-login ">
                        <div class="body-bg">
                            <a href="{{ route('home')}}">
                            <img src="frontend\images\Icon_LB_C_H.png" alt="" class="w-50">
                            </a>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
            
                                <div class="form-group row">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                        <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
            
                                <div class="form-group row">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
            
                                <div class="form-group row">
            
                                        <div class="form-check my-1">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    
                                </div>
            
                                <div class="form-group py-2">
                                    <button type="submit" class="btn btn-primary px-5 my-2">
                                        {{ __('Login') }}
                                    </button>
                                    </br>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" 
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                        <a class="btn btn-link" 
                                            href="{{ route('register') }}">
                                            {{ __('Register Here') }}
                                        </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
