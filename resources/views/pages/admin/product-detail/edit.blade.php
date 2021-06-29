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
                <div class="d-sm-flex justify-content-center m-4 p-3">
                    <h1 class="h3 mb-0 text-gray-800 "> Edit Produk {{ $item->title }}</h1>      
                </div>
                <hr>
                <form action="{{ route('product-detail.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama Product</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="type">Jenis</label>
                            <input type="text" class="form-control" name="type" placeholder="Type" value="{{ $item->type }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_types_id">Type</label>
                            <select name="product_types_id" required class="form-control">
                                <option value="{{ $item->product_types_id ?? ''}}">{{ $item->product_type->title ?? 'Pilih Type Produk'}}</option>
                                @foreach ($product_types as $product_type)
                                    <option value="{{ $product_type->id}}">
                                        {{ $product_type->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group input-group">
                        <label for="about">Keterangan</label>
                        <textarea name="about" rows="5" class="d-block w-100 form-control">{{ $item->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <div class="input-group-text input-group-prepend">Rp.</div>
                            <input type="number" class="form-control input-group-append" name="price" placeholder="Price" value="{{ $item->price }}">
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