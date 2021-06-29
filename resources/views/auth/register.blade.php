@extends('layouts.login')

@section('title')
    Invisign - Register
@endsection

@section('content')
<section class="register">
    <div class="container">
        <div class="row justify-content-center vh-100 py-5">
            <div class="col-md-8 text-center">
                <div class="card-body body card-register ">
                    <div class="body-bg">
                        <a href="{{ route('home')}}">
                            <img src="frontend\images\Icon_LB_C_H.png" alt="" class="w-25">
                        </a>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
        
                            <div class="form-group row justify-content-center">
                                <label for="username" class="col-md-3 col-form-label">{{ __('Username') }}</label>
                                
                                <div class="col-md-7">
                                    <input placeholder="Username" id="username" type="username" 
                                        class="col-md-3 form-control @error('username') is-invalid @enderror" 
                                        name="username" value="{{ old('username') }}" 
                                        required autocomplete="username" autofocus>
        
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <label for="name" class="col-md-3 col-form-label">{{ __('Name') }}</label>
                                <div class="col-md-7">
                                    <input placeholder="Name" id="name" type="name" 
                                        class="col-md-3 form-control @error('name') is-invalid @enderror" 
                                        name="name" value="{{ old('name') }}" 
                                        required autocomplete="name" autofocus>
        
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <label for="email" class="col-md-3 col-form-label">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-7">
                                    <input placeholder="E-mail" id="email" type="email" 
                                        class="form-control @error('email') is-invalid @enderror" 
                                        name="email" value="{{ old('email') }}" 
                                        required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
        
                            <div class="form-group row justify-content-center">
                                <label for="password" class="col-md-3 col-form-label">{{ __('Password') }}</label>
                                <div class="col-md-7">
                                    <input placeholder="Password" id="password" type="password" 
                                        class="form-control @error('password') is-invalid @enderror" 
                                        name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <div class="col-md-7">
                                    <input placeholder="Confirm Password" id="password-confirm" type="password" 
                                    class="form-control" name="password_confirmation" 
                                    required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="justify-content-center my-3 px-3">
                                <button type="submit" class="btn btn-primary px-5">
                                    {{ __('Register') }}
                                </button>
                                </br>
                                <a class="btn btn-link" 
                                        href="{{ route('login') }}">
                                        {{ __('Already have an account? Login Here') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
