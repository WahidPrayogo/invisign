@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid detail-daftar-produk">

        

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <!-- Content Detail -->
        <div class="card shadow">
            <div class="card-body">
                <!-- Page Heading -->
                <div class="d-sm-flex  justify-content-center text-center my-3 my-md-0 m-md-4 p-md-3">
                    <h1 class="h3  text-gray-800"> Detail Produk {{ $item->title }}</h1>      
                </div>
                <hr>
                <!-- Detail -->
                <div class="row">
                    <!-- Pic Detail -->
                    <div class="col-12 pic-monile d-md-none text-center mb-3">
                        <img src="{{ $item->galleries->count() ? Storage::url
                        ($item->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                        class="img-detail w-50">
                    </div>

                    <!-- Table Detail -->
                    <div class="col-12 col-md-8">
                        <table class="table table-bordered">
                            <tr>
                                <th >ID</th>
                                <td>{{ $item->id }}</td>
                            </tr>
                            <tr>
                                <th >Nama</th>
                                <td>{{ $item->title }}</td>
                            </tr>
                            <tr>
                                <th >Jenis</th>
                                <td>{{ $item->product_type->title }}</td>
                            </tr>
                            <tr>
                                <th >Keterangan</th>
                                <td>{{ $item->about}}</td>
                            </tr>
                            <tr>
                                <th >Harga</th>
                                <td>@currency($item->price)</td>
                            </tr>
                            <tr>
                                <th>Gallery</th>
                                <td>
                                    <!-- Table Gallery -->
                                    <table>
                                        <tr>
                                            <th>ID</th>
                                            <th>Gambar</th>
                                            <th>Action</th>
                                        </tr>
                                        @forelse ($item->galleries as $gallery)
                                        <tr>
                                            <td>{{ $gallery->id }}</td>
                                            <td>
                                                <img src="{{ Storage::url($gallery->image)}}" alt="" style="width: 150px" class="img-thumbnail">
                                            </td>
                                            <td>
                                                <a href="{{ route('gallery.edit', $gallery->id)}}" class="btn btn-info d-block">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('gallery.destroy', $gallery->id)}}" method="POST" 
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger d-block my-1">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Data Kosong
                                                </td>
                                            </tr>
                                        @endforelse
                                    </table>
                                </td>  
                            </tr>
                        </table>
                    </div>
                    
                    <!-- Pic Detail -->
                    <div class="col-md-3 pic d-none d-md-block">
                        <img src="{{ $item->galleries->count() ? Storage::url
                        ($item->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                        class="img-detail w-100">
                    </div>
                
                </div>

                <!-- Nav -->
                <div class="button-nav">
                    <div class="row justify-content-center">
                        <a href="{{ route('product-detail.index')}}" class="btn btn-primary px-3 px-md-5">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('product-detail.edit', $item->id)}}" class="btn btn-info px-3 px-md-5 d-block">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('product-detail.destroy', $item->id)}}" method="POST" 
                            class="d-inline px-2">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger d-block d-md-none px-3">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    
@endsection