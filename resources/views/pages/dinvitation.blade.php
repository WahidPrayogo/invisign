@extends('layouts.app')

@section('title')
    Invisign - Design Invitation
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
              <li class="breadcrumb-item active">Design Invitation</li>
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
                  @foreach ($items as $item)
                    <div class="section-package-list col-lg-4">
                      <div class="card-our-package">
                        <div class="package-title px-2">
                          {{ $item->title}}
                        </div>
                        <br />
                        <img src="" alt="">
                        <div class="text-center">
                          <img src="{{ $item->galleries->count() ? Storage::url
                          ($item->galleries->first()->image) : 'frontend\images\Icon Invisign_Icon Black.png' }}" width="75%">
                        </div>
                        <hr>
                        <div class="price">
                          Mulai dari
                          <h5>Rp. {{ $item->price}},-</h5>
                          <p> Rp. {{ $item->price}},- </p> 
                        </div>
                        <div class="pesan">
                          @auth
                            <form action="{{ route('orders_process', $item->id) }}" method="POST">
                              @csrf
                              <button class="btn btn-block btn-package d-flex flex-column" type="submit">
                                Pesan Sekarang
                              </button>
                            </form>
                          @endauth
                          @guest
                            <a href="{{ route('login')}}" class="btn btn-package d-flex flex-column">
                              Login/Register untuk Pesan
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
    </div>
  </section>
@endsection