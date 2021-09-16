@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid daftar-transaksi">

       

        <!-- Page Content -->
        <div class="card shadow">
            <div class="card-body">

                <!-- Page Heading -->
                <div class="d-sm-flex justify-content-center text-center my-3 my-md-0 m-md-4 p-md-3">
                    <h1 class="h3 mb-0 text-gray-800">Daftar Transaksi</h1>
                </div>
                <hr>
                
                <!-- Table Content -->
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th class="mobile">Product</th>
                                        <th>User</th>
                                        <th class="mobile">Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $no => $item)
                                        <tr>
                                            <td class="text-center">{{ $items->firstItem() + $no }}</td>
                                            <td class="mobile">{{ $item->product_detail->title }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td class="mobile">@currency($item->transaction_total)</td>
                                            <td class="text-center">{{ $item->transaction_status }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('transaction.show', $item->id)}}" class="btn btn-primary">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('transaction.edit', $item->id)}}" class="btn btn-info mobile">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('transaction.destroy', $item->id)}}" method="POST" 
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger mobile">
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