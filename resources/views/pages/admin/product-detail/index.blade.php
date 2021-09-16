@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid daftar-produk">

        

        <!-- Page Content -->
        <div class="card shadow">
            <div class="card-body">
                                
                <!-- Page Heading -->
                <div class="d-sm-flex justify-content-center text-center my-3 my-md-0 m-md-4 p-md-3">
                    <h1 class="h3 mb-0 text-gray-800">Daftar Design Undangan</h1>
                </div>
                <hr>
                <!-- Topbar Search -->
                <div class="row search-cus">
                    <div class="col-12 col-md-6 d-flex align-items-center ">
                        <form action="{{ route('isearch')}}" method="GET" class="form-inline mr-auto ml-md-1 my-2 my-md-0 navbar-search ">
                            @csrf
                            <div class="input-group">
                                <select name="column" for="column" required class="text-gray form-control input-group-pend">
                                    <option value="title">Nama Produk</option>
                                    <option value="type">Jenis</option>
                                    <option value="price">Harga</option> 
                                    <option value="product_types.title">Type Product</option>  
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
                    <div class="col-md-6 d-flex flex-md-row-reverse">
                        <a href="{{ route('product-detail.create')}}" class="d-block d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-1 mt-md-0 my-md-2"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk</a>
                    </div>
                </div>

                <!-- Table Content -->
                <div class="row ">
                    <div class="card-body align-items-center">
                        <div class="table-responsive ">
                            <table class="table table-bordered " width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Type</th>
                                        <th class="t-harga">Harga</th>
                                        <th class="t-disc">Discount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $no => $item)
                                    <tr>
                                        <td class="text-center">{{ $items->firstItem() + $no }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->product_type->title ?? 'N/A'}}</td>
                                        <td class="c-harga">@currency($item->price)</td>
                                        <td class="c-disc text-center">{{ $item->product_type->product_discount->amount*100 }}%</td>
                                        <td class="text-center">
                                            <a href="{{ route('product-detail.show', $item->id)}}" class="btn btn-primary">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('product-detail.edit', $item->id)}}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('product-detail.destroy', $item->id)}}" method="POST" 
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
                <div class="d-sm-flex justify-content-center mb-4 pagination text-center">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
        
    </div>
    <!-- /.container-fluid -->
    
@endsection