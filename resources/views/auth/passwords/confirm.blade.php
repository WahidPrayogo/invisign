@extends('layouts.login')

@section('title')
    Invisign - Confirm Password
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100 py-5">
        <div class="col-md-8 text-center">
            <div class="card-body body card-reset ">
                <div class="body-bg">
                    <a href="{{ route('home')}}">
                        <img src="{{ url('frontend\images\Icon_LB_C_H.png')}}" alt="" class="w-25 py-4">
                    </a>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            <div class="form-group row pt-2">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row justify-content-center">
                                <div class="col-md-6  py-4 ">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm Password') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
