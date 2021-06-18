@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Detail Produk {{ $item->title }}</h1>      
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
        
        <!-- detail -->
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    
                <div class="col-md-8">
                    <table class="table table-bordered">
                        
                        <tr>
                            <th >ID</th>
                            <td>{{ $item->id }}</td>
                        </tr>
                        <tr>
                            <th >Nama Produk</th>
                            <td>{{ $item->title }}</td>
                        </tr>
                        <tr>
                            <th >Jenis Produk</th>
                            <td>{{ $item->type }}</td>
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
                                <table>
                                    <tr>
                                        <th>ID</th>
                                        
                                        <th>Gambar</th>
                                        
                                    </tr>
                                    @forelse ($item->galleries as $gallery)
                                    <tr>
                                        <td>{{ $gallery->id }}</td>
                                        <td>
                                            <img src="{{ Storage::url($gallery->image)}}" alt="" style="width: 150px" class="img-thumbnail">
                                        </td>
                                        <td>
                                            <a href="{{ route('gallery.edit', $gallery->id)}}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('gallery.destroy', $gallery->id)}}" method="POST" 
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger">
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
                <div class="col-md 3 pic">
                        <img src="{{ $item->galleries->count() ? Storage::url
                        ($item->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                        class="img-detail w-100">
                    
                </div>
                
            </div>
             
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection