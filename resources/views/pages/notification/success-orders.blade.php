@extends('layouts.app')

@section('title')
    Invisign - Order Sukses
@endsection

@section('content')

<main>
    <div class="section-success d-flex align-items-center">
      <div class="content-success col text-center">
        <h1>Terimakasih</h1>
        <img src="{{ url('frontend\images\Icon_B.png')}}" alt="" width="10%" class="my-3">
        <p>Selemat pesanan anda telah kami terima</p>
        <p>Silahkan cek Email untuk melihat detail pemesanan dan upload bukti bayar pada menu <strong><a href="{{ route('myorder.index')}}">Cek pesanan</a></strong></p>
        <a href="{{ route('home')}}" class="btn btn-success  mt-3 px-5">Kembali</a>
      </div>
    </div>
  </main>


@endsection