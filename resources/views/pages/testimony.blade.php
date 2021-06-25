@extends('layouts.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Tambah Gallery</h1>      
        </div>
    
        <div class="card shadow">
            <form action="{{ route('testi-confirm', $item->id)}}" method="GET">
                @csrf
                <div class="form-group">
                    <label for="testi">Title</label>
                    <input type="text" class="form-control" name="testi" placeholder="testi" value="{{ $item->testi }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ubah</button>
            </form>
               
             
            <div class="card-body">
                
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection