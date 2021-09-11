@extends('layouts.app')

@section('title')
    Invisign - Order Sukses
@endsection

@section('content')

<section class="section-myorder-detail ">
    
    <!-- Begin Page Content -->
    <div class="container p-md-5 ">

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
        <div class="card shadow body">
            <div class="body-bg">
            <div class="card-body ">
            
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-center ">
                    <h1 class="h3 mb-md-0 mt-md-3 text-gray-800"> Detail Transaksi {{ $item->id }}</h1>
                </div>
                
                <!-- Content -->
                <div class=" row justify-content-center p-md-5">
                    <div class="col-12 col-md-3 mobile">
                        <div class="card-body text-center">
                            <img src="{{ $item->product_detail->galleries->count() ? Storage::url
                            ($item->product_detail->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                            class="img-detail ">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-md-3">
                        <table class="table table-bordered ">
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
                                <td>
                                    @if ($item->bukti_transfer == '' && $item->transaction_status != 'CANCEL')
                                        <a href="{{ route('myorder.edit', $item->id)}}" class="btn btn-warning m-md-1"><i class="fa fa-folder-open"></i>&nbsp;Upload Bukti Transfer</a>
                                    @elseif ($item->bukti_transfer == '' && $item->transaction_status == 'CANCEL')
                                        {{ $item->transaction_status }}
                                    @else
                                        {{ $item->transaction_status }}
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-3 main">
                        <div class="card-body text-center">
                            <img src="{{ $item->product_detail->galleries->count() ? Storage::url
                            ($item->product_detail->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                            class="img-detail w-100">
                        </div>
                    </div>
                </div>
            
            </div>

            <!-- Nav -->
            <div class="container pb-md-5">
                <div class=" text-center">
                    <a href="{{ route('myorder.index')}}" class="btn btn-primary px-md-5">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    @if ($item->transaction_status == 'IN_CART' && $item->bukti_transfer == '')
                        <form action="{{ route('myorder.update', $item->id)}}" method="POST" 
                            class="d-inline" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <button class="btn btn-danger px-md-5" name='transaction_status' value="CANCEL" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    @endif
                    @if ($item->transaction_status == 'FINISH' )
                        <form action="{{ route('testi-process', $item->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            <button class="btn btn-success px-md-5" type="submit">
                                <i class="fa fa-star-o"></i>
                            </button>
                        </form>
                    @endif
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
    </div>
    <!-- /.container-fluid -->
</section>
    
    
@endsection