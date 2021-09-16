@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid py-3 py-md-0 dashboard ">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mt-md-4 mb-md-4 my-3 my-md-0">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <hr class="d-md-none">
        <!-- Content Row -->
        <div class="row">

            <!-- Produk Card Example -->
            <div class="col-6 col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-md-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="dashboard-text text-xs font-weight-bold text-primary text-uppercase mb-1">Produk</div>
                            <div class="h5 dashboard-number mb-0 font-weight-bold text-gray-800">{{ $product_detail }}</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Transaksi Card Example -->
            <div class="col-6 col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-md-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="dashboard-text text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Transaksi</div>
                                <div class="h5 dashboard-number mb-0 font-weight-bold text-gray-800">{{ $transaction }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Card Example -->
            <div class="col-6 col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-md-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="dashboard-text text-xs font-weight-bold text-info text-uppercase mb-1">Pending</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 dashboard-number mb-0 mr-3 font-weight-bold text-gray-800">{{ $transaction_pending }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sukses Card Example -->
            <div class="col-6 col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-md-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="dashboard-text text-xs font-weight-bold text-warning text-uppercase mb-1">Sukses</div>
                                <div class="h5 dashboard-number mb-0 font-weight-bold text-gray-800">{{ $transaction_success }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <div class="container d-md-none py-3 py-md-0">
        <div class="menu-custom">
            <h1 class="h3 mb-0 text-gray-800 my-3">Menu</h1>
            <hr>
            <div class="row text-center py-2">
                <div class="col-3"><a class="menu-item" href="{{ route('product-detail.index')}}" ><i class="fas fa-fw fa-wrench"></i><br>Product Details</a></div>
                <div class="col-3"><a class="menu-item" href="{{ route('product-type.index')}}" ><i class="fa fa-list-alt"></i><br>Product Type</a></div>
                <div class="col-3"><a class="menu-item" href="{{ route('product-discount.index')}}" ><i class="fa fa-tag"></i><br>Discount</a></div>
                <div class="col-3"><a class="menu-item" href="{{ route('gallery.index')}}" ><i class="fa fa-image"></i><br>Gallery</a></div>
            </div>

            <div class="row text-center py-2">
                <div class="col-3"><a class="menu-item" href="{{ route('transaction.index')}}" ><i class="fa fa-credit-card"></i><br>Transaksi</a></div>
                <div class="col-3"><a class="menu-item" href="{{ route('testimony.index')}}" ><i class="fa fa-comments"></i><br>Testimony</a></div>
                <div class="col-3"><a class="menu-item" href="{{ route('user-list.index')}}" ><i class="fa fa-user"></i><br>User List</a></div>
                <div class="col-3"><a class="menu-item" href="{{ route('home')}}" ><i class="fa fa-globe"></i><br>Go to Web</a></div>
            </div>
        </div>
    </div>
    
@endsection