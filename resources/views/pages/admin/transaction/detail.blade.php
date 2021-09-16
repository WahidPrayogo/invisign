@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid detail-transaksi">

        

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
                <div class="d-sm-flex align-items-center justify-content-center text-center my-3 my-md-0 m-md-4 p-md-3">
                    <h1 class="h3 mb-0 text-gray-800"> Detail Transaksi {{ $item->user->name }}</h1>      
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-8 ">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <td>{{ $item->id }}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $item->product_detail->title }}</td>
                            </tr> 
                            <tr>
                                <th>Pembeli</th>
                                <td>{{ $item->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>@currency($item->transaction_total)</td>
                            </tr>      
                            <tr>
                                <th>Status Transaksi</th>
                                <td>{{ $item->transaction_status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <!-- Nav -->
                <div class="button-nav">
                    <div class="row justify-content-center">
                        <a href="{{ route('transaction.index')}}" class="btn btn-primary px-3 px-md-5">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('transaction.edit', $item->id)}}" class="btn btn-info px-3 px-md-5 mobile d-md-none">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('transaction.destroy', $item->id)}}" method="POST" 
                            class="d-inline px-2">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mobile d-md-none px-3">
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