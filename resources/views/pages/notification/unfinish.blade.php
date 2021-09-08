@extends('layouts.app')

@section('title')
    Invisign - Order Sukses
@endsection

@section('content')

<main>
    <div class="section-success d-flex align-items-center">
      <div class="content-success col text-center">
        <h1>Oops!</h1>
        <img src="{{ url('frontend\images\Icon_B.png')}}" alt="" width="10%" class="my-3">
        <p>Transaksi anda belum selesai</p>
        <p>Silahkan hubungi admin untuk bantuan</p>
        <a href="{{ route('home')}}" class="btn btn-success  mt-3 px-5">Kembali</a>
      </div>
    </div>
  </main>


@endsection