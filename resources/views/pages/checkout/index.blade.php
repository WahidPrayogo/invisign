@extends('layouts.app')

@section('title')
    Invisign - Order List
@endsection

@section('content')

<section class="section-order">
  <div class="container py-md-5">
    <div class="container">
      <div class="row">
        <div class="text-center title ">
          <h1>Checkout</h1>
        </div>
      </div>     
    </div>
    <div class="container ">
      <div class="row justify-content-center ">
        
          <div class="col-8 col-md-4 detail-product body mx-md-2 mx-1">
            <div class="body-bg">
              <div class="product-title text-center">
                {{ $item->product_detail->title}} <br>
                <p>{{ $item->product_detail->product_type->title}}</p>
              </div>
              <div class="card-body text-center pb-md-4">
                <img src="{{ $item->product_detail->galleries->count() ? Storage::url
                ($item->product_detail->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                class="img-detail">
              </div>              
            </div>
          </div>
          <div class="col-10 col-md-4 detail-order body mx-md-2 ">
            <div class="body-bg ">
              <div class="card-body text-center p-0 pt-2">
                <img src="{{ $item->product_detail->galleries->count() ? Storage::url
                ($item->product_detail->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                class="img-detail-mobile">
              </div>    
              <div class="order-title text-center">
                Details Orders
              </div>
              <table class="table table-detail ">
                <tbody>
                  <tr>
                    <th scope="row" class="col-5">Product Name </th>
                    <td class="col-1 text-center">:</td>
                    <td class="col-6">{{ $item->product_detail->title}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Price </th>
                    <td class="col-1 text-center">:</td>
                    <td>@currency ($item->product_detail->price)</td>
                  </tr>
                  <tr>
                    <th scope="row">Dicsount</th>
                    <td class="col-1 text-center">:</td>
                    <td>{{$item->product_detail->product_type->product_discount->amount*100 ?? 'N/A'}}%</td>
                  </tr>
                  <tr>
                    <th scope="row">Total</th>
                    <td class="col-1 text-center">:</td>
                    <td>@currency($item->transaction_total)</td>
                  </tr>
                </tbody>
              </table>
              <div class="payment px-2 "><i>
                Pembayaran bisa melalui rek berikut
                <p>BRI 682201000466503 a/n <strong>WAHID PRAYOGO</strong>
                </p></i>
              </div>
              <div class="button text-center">
                <a href="{{ route('orders-success', $item->id)}}" 
                  class="btn btn-confirm m-1 "><i class="fa fa-check"></i></a>
                <a href="{{ route('dinvitation')}}" 
                  class="btn btn-cancel m-1"><i class="fa fa-times"></i></a>
                <a href="#" 
                  class="btn btn-order m-1"><i class="fa fa-print"></i></a>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </div>
</section>         

@endsection