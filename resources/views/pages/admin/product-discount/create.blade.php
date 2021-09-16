@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid tambah-discount">

        

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
                    <h1 class="h3 mb-0 text-gray-800"> Tambah Promo</h1>      
                </div>
                <hr>
                <form action="{{ route('product-discount.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title')}}">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="pakages_id">packages_id</label>
                            <input type="number" class="form-control" name="pakages_id" placeholder="pakages_id" value="{{ old('pakages_id')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="amount">Discount</label>
                            <div class="input-group">
                                <input type="number" class="form-control input-group-prepend" name="amount" placeholder="1-100" min="0" step=".01" value="{{ old('amount')}}">
                                <div class="input-group-text input-group-append">%</div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="start_at">Mulai</label>
                            <input type="date" class="form-control" name="start_at" placeholder="Start " value="{{ old('start_at')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="end_at">Selesai</label>
                            <input type="date" class="form-control" name="end_at" placeholder="end " value="{{ old('end_at')}}">
                        </div>
                    </div>
                    
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary w-25">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection