@extends('layouts.app')

@section('title')
    Invisign - Setting
@endsection

@section('content')

<section class="setting">

    <div class="container">
        <div class="row justify-content-center p-5">
            <div class="col-md-9 content">
                <div class="row justify-content-center">
                    <div class="col-md-3 side-setting text-center" >
                        <a href="#" >
                            <img class="img-profile rounded-circle  mx-auto" height="100" src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}">
                        </a>
                        <h4 class="name mt-2">{{ Auth::user()->name }}</h2>
                        <h6 class="username">{{ Auth::user()->username }}</h3>
                    </div>
                    <div class="col-md-9 content-setting ">
                        <div class="cover-blur p-5">
                            <h3><i class="fa fa-user"></i> Profile</h3>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-6 my-2">
                                    <label for="name">Nama</label>
                                    <input type="text" disabled class="form-control mt-2" name="name" placeholder="Nama" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group col-md-6 my-2">
                                    <label for="username">Username</label>
                                    <input type="text" disabled class="form-control mt-2" name="username" placeholder="Username" value="{{ Auth::user()->username }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 my-2">
                                    <label for="email">Email</label>
                                    <input type="text" disabled class="form-control mt-2" name="email" placeholder="E-mail" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="form-group col-md-6 my-2">
                                </div>
                            </div>
                            <!-- Nav -->
                            <div class="button-nav mt-3">
                                <a href="{{ route('setting.edit',Auth::user()->id)}}" class="btn btn-edit  px-md-5">
                                    Edit Profile &nbsp;<i class="fa fa-pencil"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>

</section>



@endsection