@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid edit-user">

        

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
            
        @endif
            
        <div class="card shadow">
            <div class="card-body">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-center text-center my-3 my-md-0 m-md-4 p-md-3">
                    <h1 class="h3 mb-0 text-gray-800"> Edit User Role</h1>      
                </div>
                <hr>
                <form action="{{ route('user-list.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $item->username }}">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" name="email" value="{{ $item->email }}">
                    </div>
                    <div class="form-group">
                        <label for="roles">Roles</label>
                        <select name="roles" required class="form-control">
                            <option value="{{ $item->roles }}">{{ $item->roles . ' (Current)'}}</option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="USER">USER</option>
                        </select>
                    </div>
                    
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary w-25">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection