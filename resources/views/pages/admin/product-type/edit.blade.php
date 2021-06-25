@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Edit Produk Type{{ $item->title }}</h1>      
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
                <form action="{{ route('product-type.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                    </div>
                    <div class="form-group">
                        <label for="feature_1">Feature 1</label>
                        <input type="text" class="form-control" name="feature_1" placeholder="Type" value="{{ $item->feature_1 }}">
                    </div>
                    <div class="form-group">
                        <label for="feature_2">Feature 2</label>
                        <input type="text" class="form-control" name="feature_2" placeholder="Type" value="{{ $item->feature_2 }}">
                    </div>
                    <div class="form-group">
                        <label for="feature_3">Feature 3</label>
                        <input type="text" class="form-control" name="feature_3" placeholder="Type" value="{{ $item->feature_3 }}">
                    </div>
                    <div class="form-group">
                        <label for="feature_4">Feature 4</label>
                        <input type="text" class="form-control" name="feature_4" placeholder="Type" value="{{ $item->feature_4 }}">
                    </div>
                    <div class="form-group">
                        <label for="feature_5">Feature 5</label>
                        <input type="text" class="form-control" name="feature_5" placeholder="Type" value="{{ $item->feature_5 }}">
                    </div>
                    <div class="form-group">
                        <label for="product_discounts_id">Produk</label>
                        <select name="product_discounts_id" required class="form_control">
                            <option value="{{ $item->product_discount->id}}">Pilih Promo{{ $item->product_discount->title}}&nbsp;{{ $item->product_discount->amount*100}}%</option>
                            @foreach ($product_discounts as $product_discount)
                                <option value="{{ $product_discount->id}}">
                                    {{ $product_discount->title}}&nbsp;{{ $product_discount->amount*100}}%
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection