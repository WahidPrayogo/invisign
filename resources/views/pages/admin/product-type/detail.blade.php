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
        
        <!-- Content Detail -->
        <div class="card shadow">
            <div class="card-body">

                        <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-center m-4 p-3">
                    <h1 class="h3 mb-0 text-gray-800"> Detail Produk Type {{ $item->title }}</h1>      
                </div>
                <hr>
                <!-- Detail -->
                <div class="row justify-content-center">
                    
                    <!-- Table Detail -->
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tr>
                                <th >ID</th>
                                <td>{{ $item->id }}</td>
                            </tr>
                            <tr>
                                <th >Nama Type</th>
                                <td>{{ $item->title }}</td>
                            </tr>
                            <tr>
                                <th >Feature</th>
                                <td>
                                    {{ $item->feature_1 }}</br>
                                    {{ $item->feature_2 }}</br>
                                    {{ $item->feature_3 }}</br>
                                    {{ $item->feature_4 }}</br>
                                    {{ $item->initial_price }}</br>
                                </td>
                            </tr>
                            <tr>
                                <th>Discount</th>
                                <td>{{ $item->product_discount->title }}&nbsp;&nbsp;{{ $item->product_discount->amount*100 }}%</td>
                            </tr>
                        </table>
                    </div>
                    
                
                </div>

                <!-- Nav -->
                <div class="button-nav">
                    <div class="row justify-content-center">
                        <a href="{{ route('product-type.index')}}" class="btn btn-primary px-md-5">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('product-type.edit', $item->id)}}" class="btn btn-info px-md-5">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    
@endsection