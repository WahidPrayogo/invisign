@extends('layouts.app')

@section('title')
    Invisign - Upload Bukti Transfer
@endsection

@section('content')

<section class="section-uptf">
    <!-- Begin Page Content -->
    <div class="container py-5 ">

        

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <div class="row justify-content-center">  
            <div class="card col-md-6 shadow body">
                <div class="card-body body-bg p-2">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Upload Bukti Transfer</h1>      
                    </div>
                    <form action="{{ route('myorder.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <input type="file" name="bukti_transfer" placeholder="bukti_transfer" class="form-control">
                        </div>
                        <p>*Ukuran file maksimal 1 MB, format ( .jpg )</p>
                        <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

@endsection