@extends('layouts.app')

@section('title')
    Invisign - Order Sukses
@endsection

@section('content')

<section class="section-myorder detail">
    
    <!-- Begin Page Content -->
    <div class="container py-2">

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
        <div class="card shadow m-5">
            <div class="card-body">
            
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-center ">
                    <h1 class="h3 mb-0 mt-3 text-gray-800"> Detail Transaksi {{ $item->user->name }}</h1>
                </div>
                
                <!-- Content -->
                <div class=" row justify-content-center p-md-5">
                    <div class="col col-md-6 ">
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
                                <th>Harga</th>
                                <td>@currency($item->product_detail->price)</td>
                            </tr>
                            <tr>
                                <th>Discount</th>
                                <td>{{ $item->product_detail->product_type->product_discount->amount*100 }}&nbsp;%</td>
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
                    <div class="order-list col col-md-3">
                        <div class="card-body text-center">
                            <img src="{{ $item->product_detail->galleries->count() ? Storage::url
                            ($item->product_detail->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                            class="img-detail w-100">
                            
                        </div>
                    </div>
                </div>

            </div>

            <!-- Nav -->
            <div class="container pb-5">
                <div class=" text-center">
                    <a href="{{ route('myorder.index')}}" class="btn btn-primary px-md-5">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a href="" class="btn btn-warning px-md-5">
                        <i class="fa fa-print"></i>
                    </a>
                    <a href="" class="btn btn-success px-md-5">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                    
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</section>
    
    
@endsection