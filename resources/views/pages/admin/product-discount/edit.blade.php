@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid edit-discount">

        

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
                    <h1 class="h3 mb-0 text-gray-800"> Edit Promo {{ $item->title }}</h1>      
                </div>
                <hr>
                <form action="{{ route('product-discount.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pakages_id">packages_id</label>
                            <input type="number" class="form-control" name="pakages_id" placeholder="pakages_id" value="{{ $item->pakages_id }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="amount">Amount</label>
                            <div class="input-group">
                                <input type="number" class="form-control input-group-prepend" name="amount" placeholder="Amount" min="0" step=".01" value="{{ $item->amount*100 }}">
                                <div class="input-group-text input-group-apppend">%</div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select name="status" required class="form-control">
                                <option value="{{ $item->status}}">{{ $item->status}}</option>
                                @if ($item->status == 'ACTIVE')
                                <option value="HIGHLIGHT">HIGHLIGHT</option>                                    
                                @elseif ($item->status == 'HIGHLIGHT')
                                <option value="ACTIVE">ACTIVE</option>                                    
                                @endif

                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="start_at">Mulai{{ date('dmY', strtotime($item->start_at))}}</label>
                            <input type="date"  class="form-control" name="start_at" placeholder="Start " value="{{ date('Y-m-d', strtotime($item->start_at))}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="end_at">Selesai</label>
                            <input type="date" class="form-control" name="end_at" placeholder="end " value="{{ date('Y-m-d', strtotime($item->end_at))}}"></textarea>
                        </div>
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