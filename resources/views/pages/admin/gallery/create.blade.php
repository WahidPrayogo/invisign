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
                    <h1 class="h3 mb-0 text-gray-800"> Tambah Gallery</h1>      
                </div>
                <hr>
                <form action="{{ route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group ">
                        <label for="product_details_id">Nama Produk</label>
                        <select name="product_details_id" required class="form-control">
                            <option value="">Pilih Nama Produk</option>
                            @foreach ($product_details as $product_detail)
                                <option value="{{ $product_detail->id}}">
                                    {{ $product_detail->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="image">Image</label>
                        <input type="file" name="image" placeholder="image" class="form-control">
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