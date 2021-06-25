@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Tambah Promo</h1>      
        </div>

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
                <form action="{{ route('product-discount.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title')}}">
                    </div>
                    <div class="form-group">
                        <label for="pakages_id">packages_id</label>
                        <input type="number" class="form-control" name="pakages_id" placeholder="pakages_id" value="{{ old('pakages_id')}}">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" name="amount" placeholder="Amount" min="0" step=".01" value="{{ old('amount')}}">
                    </div>
                    <div class="form-group">
                        <label for="start_at">strarted at</label>
                        <input type="date" class="form-control" name="start_at" placeholder="Start " value="{{ old('start_at')}}">
                    </div>
                    <div class="form-group">
                        <label for="end_at">ended at</label>
                        <input type="date" class="form-control" name="end_at" placeholder="end " value="{{ old('end_at')}}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection