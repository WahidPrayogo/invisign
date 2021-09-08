@extends('layouts.app')

@section('title')
    Invisign - Beri Penilaian
@endsection

@section('content')

<section class="section-input-testimoni">
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
            <div class="card col-10 col-md-6 shadow body">
                <div class="card-body body-bg p-3">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Beri Penilaian / Masukan</h1>      
                    </div>

                    <form action="{{ route('testi-confirm', $item->id)}}" method="GET">
                        @csrf
                        <div class="form-group">
                            <input type="textbox" class="form-control" name="testi" placeholder="Tulis testimoni anda disini..." value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-2 mt-md-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        
    </div>
    <!-- /.container-fluid -->
</section>

@endsection