@extends('layouts.app')

@section('title')
    Invisign - Order List
@endsection

@section('content')
  <section class="section-detail-order">
    <div class="container">
      <div class="row">
        <div class="col-lg pl-lg-0">
            <section class="section-order">
              <div class="container">
                <div class="row">
                  <div class="text-center title ">
                    <h1>Checkout Detail</h1>
                  </div>
                </div>     
              </div>
              <div class="container">
                <div class="row content-center">
                  <div class="order-list col col-lg-4">
                    <div class="detail-product">
                      <div class="product-title">
                        {{ $items->title}}
                      </div>
                      <div class="card-body text-center">
                        <img src="{{ $items->galleries->count() ? Storage::url
                        ($items->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                        class="img-detail">
                      </div>
                      <div class="price">
                        Mulai dari
                        <h5>Rp. {{ $items->price}},-</h5>
                        <p> Rp. {{ $items->price}},- </p>
                      </div>
                    </div>
                  </div>
                  <div class="order-list col col-lg-8">
                    <div class="detail-order">
                      <div class="order-title ">
                        Details Orders
                      </div>
                      <table class="table table-bordered table-detail">
                        <tbody>
                          <tr>
                            <th scope="row" class="col-5">Product Name </th>
                            <td class="col-1 text-center">:</td>
                            <td class="col-6">{{ $item->product_detail->title}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Price </th>
                            <td class="col-1 text-center">:</td>
                            <td>Rp.&nbsp;{{ $item->product_detail->price}},-</td>
                          </tr>
                          <tr>
                            <th scope="row">Dicsount / Promo </th>
                            <td class="col-1 text-center">:</td>
                            <td>N/A</td>
                          </tr>
                          <tr>
                            <th scope="row">Unique Number </th>
                            <td class="col-1 text-center">:</td>
                            <td>99</td>
                          </tr>
                          <tr>
                            <th scope="row">Total</th>
                            <td class="col-1 text-center">:</td>
                            <td>Rp.&nbsp;{{ $item->product_detail->price}},-</td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="payment"><i>
                        Pembayaran bisa melalui rek berikut
                        <p>BRi XXXXXXXXX
                          <br>
                          BNI XXXXXXX
                        </p></i>
                      </div>
                      <div class="button ">

                      <a href="{{ route('orders-success', $item->id)}}" 
                        class="btn btn-success m-1 ">Konfirmasi Pesanan&nbsp;<i class="fa fa-check"></i></a>
                      <a href="{{ route('dinvitation')}}" 
                        class="btn btn-danger m-1">Batalkan Pesanan&nbsp;<i class="fa fa-times"></i></a>
                      <a href="#" 
                        class="btn btn-primary m-1">Cetak&nbsp;<i class="fa fa-print"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
      </div>
    </div>
  </section>

@endsection