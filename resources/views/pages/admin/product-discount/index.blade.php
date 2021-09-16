@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid daftar-discount">

       
        <!-- Page Content -->
        <div class="card shadow">
            <div class="card-body">
                
                <!-- Page Heading -->
                <div class="d-sm-flex justify-content-center text-center my-3 my-md-0 m-md-4 p-md-3">
                    <h1 class="h3 mb-0 text-gray-800">Program Discount</h1>
                </div>
                <hr>
                <!-- Topbar Search -->
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        
                    </div>
                    <div class="col-md-6 d-flex flex-md-row-reverse">
                        <a href="{{ route('product-discount.create')}}" class="d-block d-sm-inline-block btn btn-sm btn-primary shadow-sm my-2"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Discount</a>
                    </div>
                </div>

                <!-- Table Content -->
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered " width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Program</th>
                                        <th>Amount</th>
                                        <th class="mobile">Mulai</th>
                                        <th class="mobile">Berakhir</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $no => $item)
                                    <tr>
                                        <td class="text-center">{{ $items->firstItem() + $no }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->amount*100 }}%</td>
                                        <td class="mobile">{{ $item->start_at }}</td>
                                        <td class="mobile">{{ $item->end_at }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('product-discount.edit', $item->id)}}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('product-discount.destroy', $item->id)}}" method="POST" 
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