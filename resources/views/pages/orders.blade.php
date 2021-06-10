@extends('layouts.app')

@section('title')
    Invisign - Order List
@endsection

@section('content')
<section class="section-dinvitation-header"></section>
<section class="section-dinvitation-content">
  <div class="container">
    <div class="row">
      <div class="col p-0">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Product</li>
            <li class="breadcrumb-item">Design Invitation</li>
            <li class="breadcrumb-item active">Order</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-lg pl-lg-0">
        <div class="card card-details">
          <section class="section-package">
            <div class="container">
              <div class="row">
                <div class="text-center title-section ">
                  <h1>Catalog Design Invitation</h1>
                </div>
              </div>     
            </div>
            <div class="container">
              <div class="row">
                <div class="section-package-list col-lg-4">
                  <div class="card-our-package">
                    <div class="package-title px-2">
                      {{ $items->title}}
                    </div>
                    <br />
                    <img src="" alt="">
                    <div class="text-center">
                      <img src="{{ $items->galleries->count() ? Storage::url
                      ($items->galleries->first()->image) : 'frontend\images\Icon Invisign_Icon Black.png' }}" width="75%">
                    </div>
                    <hr>
                    <div class="price">
                      Mulai dari
                      <h5>Rp. {{ $items->price}},-</h5>
                      <p> Rp. {{ $items->price}},- </p>
                    </div>
                  </div>
                </div>
                <div class="section-package-list col-lg">
                  <div class="card-our-package">
                    <div class="package-title px-2">
                      Details Orders
                    </div>
                    <br />
                    <div class="row">
                      <div class="col-lg-3 details-orders">
                        <ul>
                          <li>Product Name </li>
                          <li>Price</li>
                          <li>Disc</li>
                          <li>unique number</li>
                          <hr>
                          <li>Total</li>
                        </ul>
                      </div>
                      <div class="col-lg details-orders">
                        <ul>
                          <li>{{ $item->product_detail->title}} </li>
                          <li>{{ $item->product_detail->price}}</li>
                          <li>Disc</li>
                          <li>unique number</li>
                          <hr>
                          <li>{{ $item->product_detail->title}}</li>
                        </ul>
                      </div>
                    </div>
                    <hr>
                    <div class="payment">
                      Pembayaran bisa melalui rek berikut
                      <p>BRi XXXXXXXXX
                        <br>
                        BNI XXXXXXX
                      </p>
                    </div>
                    <a href="{{ route('orders-success', $item->id)}}" 
                      class="btn btn-package d-flex flex-column">Konfirmasi Pesanan </a>
                    <a href="{{ route('dinvitation')}}" 
                      class="btn btn-package d-flex flex-column">batalkan Pesanan </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection