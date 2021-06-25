@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product Gallery</h1>
        </div>

        <!-- Page Content -->
        <div class="card shadow">
            <div class="card-body">
                
                <!-- Topbar Search -->
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <form action="{{ route('gsearch')}}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-1 my-2 my-md-0 mw-100 navbar-search ">
                            @csrf
                            <div class="input-group">
                                <select name="column" for="column" required class="form-control input-group-pend">
                                    <option value="product_details.title">Nama Produk</option>   
                                </select>
                                <input name="search" type="text" class="form-control bg-light border-1 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 d-flex flex-row-reverse">
                        <a href="{{ route('gallery.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm my-2"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk</a>
                    </div>
                </div>

                <!-- Table Content -->
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Product</th>
                                        <th>Gambar</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $no => $item)
                                    <tr>
                                        <td class="text-center">{{ $items->firstItem() + $no }}</td>
                                        <td>{{ $item->product_detail->title }}</td>
                                        <td class="text-center">
                                            <img src="{{ Storage::url($item->image)}}" alt="" style="width: 150px" class="img-thumbnail">
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('gallery.edit', $item->id)}}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('gallery.destroy', $item->id)}}" method="POST" 
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="d-sm-flex justify-content-center mb-4">
                    {{ $items->links() }}
                </div>

            </div>
        </div>  

    </div>
    <!-- /.container-fluid -->
    
@endsection