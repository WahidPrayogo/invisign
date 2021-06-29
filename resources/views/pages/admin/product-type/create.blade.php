@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

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
                <div class="d-sm-flex align-items-center justify-content-center m-4 p-3">
                    <h1 class="h3 mb-0 text-gray-800"> Tambah Type Produk</h1>      
                </div>
                <hr>
                <form action="{{ route('product-type.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title')}}">
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="feature_1">Feature 1</label>
                            <input type="text" class="form-control" name="feature_1" placeholder="Type" value="{{ old('feature_1')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="feature_3">Feature 3</label>
                            <input type="text" class="form-control" name="feature_3" placeholder="Type" value="{{ old('feature_3')}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="feature_2">Feature 2</label>
                            <input type="text" class="form-control" name="feature_2" placeholder="Type" value="{{ old('feature_2')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="feature_4">Feature 4</label>
                            <input type="text" class="form-control" name="feature_4" placeholder="Type" value="{{ old('feature_4')}}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="initial_price">Harga Minimal</label>
                        <div class="input-group">
                            <div class="input-group-text input-group-prepend">Rp.</div>
                            <input type="number" class="form-control input-group-append" name="initial_price" placeholder="initial_price" value="{{ old('initial_price')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product_discounts_id">Produk</label>
                        <select name="product_discounts_id" required class="form-control">
                            <option value="">Pilih Promo</option>
                            @foreach ($product_discounts as $product_discount)
                                <option value="{{ $product_discount->id}}">
                                    {{ $product_discount->title}}&nbsp;{{ $product_discount->amount*100}}%
                                </option>
                            @endforeach
                        </select>
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