@extends('layouts.app')

@section('title')
    Invisign - Setting
@endsection

@section('content')

<section class="setting">

    <div class="container">
        <div class="row justify-content-center p-3">
            <div class="col-md-3 side-setting" >
                <div class="navbar-nav sidebar ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('dashboard')}}">
                        <i class="fa fa-user"></i>
                        <span>Profile</span></a>
                    </li>
                </div>
            </div>
            <div class="col-md-6 content-setting text-center p-3">
                <a href="#" >
                    <img class="img-profile rounded-circle  mx-auto" height="100" src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}">
                </a>
                <form action="{{ route('setting.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" value="{{ Auth::user()->username }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="text" disabled class="form-control" name="email" placeholder="E-mail" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="form-group col-md-6">
                        </div>
                    </div>
                    <!-- Nav -->
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary w-25">Ubah</button>
                    </div>
                </form>
                
            </div>
            
        </div>    
    </div>

</section>



@endsection