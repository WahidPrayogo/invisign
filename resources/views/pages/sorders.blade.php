@extends('layouts.app')

@section('title')
    Invisign - Order Sukses
@endsection

@section('content')

<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <h1>Yay Success</h1>
        <img src="{{ url('frontend\images\Icon Invisign_Icon Black.png')}}" alt="" width="10%" >
        <p>Selemat pesanan anda sukses</p>
        <a href="{{ route('home')}}" class="btn btn-home-page mt-3 px-5">Kembali</a>
      </div>
    </div>
  </main>


@endsection