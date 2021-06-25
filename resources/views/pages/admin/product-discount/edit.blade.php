@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Edit Promo {{ $item->title }}</h1>      
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
                <form action="{{ route('product-discount.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="pakages_id">packages_id</label>
                        <input type="number" class="form-control" name="pakages_id" placeholder="pakages_id" value="{{ $item->pakages_id }}">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" name="amount" placeholder="Amount" min="0" step=".01" value="{{ $item->amount*100 }}">
                    </div>
                    <div class="form-group">
                        <label for="start_at">strarted at{{ date('dmY', strtotime($item->start_at))}}</label>
                        <input type="date"  class="form-control" name="start_at" placeholder="Start " value="{{ date('Y-m-d', strtotime($item->start_at))}}">
                    </div>
                    <div class="form-group">
                        <label for="end_at">ended at</label>
                        <input type="date" class="form-control" name="end_at" placeholder="end " value="{{ date('Y-m-d', strtotime($item->end_at))}}"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection