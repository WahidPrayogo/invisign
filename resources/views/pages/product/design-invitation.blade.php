@extends('layouts.app')

@section('title')
    Invisign - Design Invitation
@endsection

@section('content')
  <section class="section-detail-product">
    <div class="container p-0">
            <section class="section-product">
              <div class="container">
                <div class="row">
                  <div class="text-center title ">
                    <h1>Catalog Design Invitation</h1>
                  </div>
                </div>     
              </div>
              <div class="container">
                <div class="row">
                  @foreach ($items as $item)
                    <div class="product-list col-6 col-md-4 mb-3 mb-md-3 ">
                      <div class=" detail-product ">
                        <div class="detail-product-bg">
                          <div class="product-title text-center">
                            {{ $item->title}}<br>
                            <p>{{ $item->product_type->title}}</p>
                          </div>
                          <div class="card-body text-center">
                            <img src="{{ $item->galleries->count() ? Storage::url
                            ($item->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                            class="img-detail">
                          </div>
                          <div class="price ">
                            Harga
                            <h5>@currency($item->price)</h5><small>Discount {{ $item->product_type->product_discount->amount*100 }}&nbsp;%</small>
                            <p> @currency($item->price - ($item->product_type->product_discount->amount*$item->price)) </p> 
                          </div>
                          <div class="pesan text-center mb-md-2">
                            @auth
                              <form action="{{ route('orders-process', $item->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-order" type="submit">
                                  Pesan Sekarang &nbsp;<i class="fa fa-shopping-cart"></i>
                                </button>
                              </form>
                            @endauth
                            @guest
                              <a href="{{ route('login')}}" class="btn btn-order ">
                                Log In untuk Pesan&nbsp;<i class="fa fa-shopping-cart"></i>
                              </a>                               
                            @endguest
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </section>
        </div>
      </div>
    </div>
  </section>
@endsection