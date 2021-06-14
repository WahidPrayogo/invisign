@extends('layouts.app')

@section('title')
    Invisign - Design Product
@endsection

@section('content')
  <section class="section-detail-product">
    <div class="container">
      <div class="row">
        <div class="col-lg pl-lg-0">
            <section class="section-product">
              <div class="container">
                <div class="row">
                  <div class="text-center title ">
                    <h1>Catalog Design Product</h1>
                  </div>
                </div>     
              </div>
              <div class="container">
                <div class="row">
                  @foreach ($items as $item)
                    <div class="product-list col-lg-4 d-flex">
                      <div class=" detail-product ">
                        <div class="product-title">
                          {{ $item->title}}
                        </div>
                        <div class="card-body flex-fill text-center">
                          <img src="{{ $item->galleries->count() ? Storage::url
                          ($item->galleries->first()->image) : 'frontend\images\Icon_B.png' }}" 
                          class="img-detail">
                        </div>
                        <div class="price ">
                          Mulai dari
                          <h5>Rp. {{ $item->price}},-</h5>
                          <p> Rp. {{ $item->price}},- </p> 
                        </div>
                        <div class="pesan  ">
                          @auth
                            <form action="{{ route('orders_process', $item->id) }}" method="POST">
                              @csrf
                              <button class="btn btn-order " type="submit">
                                Pesan Sekarang &nbsp;<i class="fa fa-shopping-cart"></i>
                              </button>
                            </form>
                          @endauth
                          @guest
                            <a href="{{ route('login')}}" class="btn btn-order">
                              Login/Register untuk Pesan &nbsp;<i class="fa fa-user"></i>
                            </a>                               
                          @endguest
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