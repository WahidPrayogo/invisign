@extends('layouts.app')

@section('title')
    Invisign - Jasa Pembuatan Design
@endsection

@section('content')
    
    <!-- Header -->
    <section class="header">
        <div class="container">
            <div class="row align-items-center py-md-5 ">
                <div class="col-md-6 d-md-none">
                    <a class="logo" href="{{ route('home')}}">
                        <img src="{{ url('frontend/images/Icon_LW_C_H.png')}}" alt="Logo Invisign" class="w-50">
                    </a>
                </div>
                <div class="col-md-6">
                    <h1>
                    Turn your ideas into reality,<br />
                    Make your own personal <br /> 
                    Design
                    </h1>
                    <br />
                    
                    <p id="demo" class="countdown">  
                    
                                                  
                    <p>
                    <a href="#Package" class="btn btn-choose px-4 mt-4">Pesan Sekarang</a>
                </div>
                <div class="col-md-6">
                    <div class="text-center img-header">
                        <img src="frontend\images\Prod_All.png" alt="" class="w-100">
                    </div>
                </div>
            </div> 
            <div class="">
                <div class="text-center header-mobile">
                    <img src="frontend\images\Prod_All.png" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Produk -->
    <section class="section-ourprod " id="Ourprod">
        <div class="container">
            <div class="row">
                <div class="col text-center title">
                    <h1>Our Product</h1>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="ourprod-inv">
                <div class="row ourprod-inv-bg align-items-center">
                    <div class="col-12 col-md-6 mt-3 text-center img-ourprod-inv">
                        <img src="frontend\images\Prod_Invitation.png" alt="" class="">
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <div class="ourprod-inv-content py-3 ">
                            <h2> Design Invitation </h2></br>
                            <p> Saatnya beralih ke undangan digital.<br />
                            Invisign siap membantu anda sebarkan kabar bahagiamu.<br />
                            </p>
                            <a href="{{ route('dinvitation')}}" class="btn btn-ourprod px-4 mt-4">Lihat Katalog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="ourprod-prod">
                <div class="row ourprod-prod-bg align-items-center">    
                    <div class="col-12 mt-3 text-center img-ourprod-inv mobile">
                        <img src="frontend\images\Prod_Design.png" alt="" class="">
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <div class="ourprod-prod-content py-3">
                            <h2>Design Product</h2></br>
                            <p>
                            Personalisasikan produk anda.<br />
                            Dengan design yang premium dan elegan.<br />
                            </p>
                            <a href="{{ route('dproduct')}}" class="btn btn-ourprod px-4 mt-4">Lihat Katalog</a>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-3 text-center img-ourprod-inv">
                        <img src="frontend\images\Prod_Design.png" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket -->
    <section class="section-package" id="Package">
        <div class="container">
            <div class="row">
                <div class="text-center title">
                    <h1>Pilih Paket</h1>
                </div>
            </div>    
        </div>
        <div class="container">
            <div class="row justify-content-md-center mt-5">
                
                @foreach ($items as $item)
                <div class="package-list col-6 col-md-3 text-center pb-4">
                    <div class="card-our-package text-center" >
                        <div class="card-our-package-bg">
                            <div class="package-title px-2">
                                Paket <br>{{ $item->title}}
                            </div>
                            <br />
                            <div class="feature-info py-2">
                                <li><i class="fa fa-check-circle"></i>&nbsp;{{ $item->feature_1}}</li>
                                <li><i class="fa fa-check-circle"></i>&nbsp;{{ $item->feature_2}}</li>
                                <li><i class="fa fa-check-circle"></i>&nbsp;{{ $item->feature_3}}</li>
                            </div>
                            <hr >
                            <div class="price my-2">
                            Mulai dari
                            <h5>@currency($item->initial_price)</h5><small>Discount {{ $item->product_discount->amount*100}}&nbsp;%</small>
                            <p>@currency($item->initial_price-($item->initial_price*$item->product_discount->amount ))</p>
                            </div>
                            <a href="#Ourprod" class="btn btn-package ">Pesan Sekarang&nbsp;<i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </section>

    <!-- Tesimoni -->
    <section class="section-testimonial" id="testimonialHeading">
        <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>Thanks for supporting Us</h2>
            </div>
        </div>
        </div>
        <div class="section-testimonial-content mt-5" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($testi as $testi)
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <img class="img-profile rounded-circle center mx-auto" src="https://ui-avatars.com/api/?name={{$testi->transaction->user->username}}" alt="">
                            <div class="testimonial pb-md-1 pt-md-5 mb-md-3 mx-md-1">
                            <p class="px-3">"&nbsp;{{ $testi->testimony}}&nbsp;"</p>
                            <p class="username">{{ $testi->transaction->user->name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>

    @foreach($disctime->where('status','HIGHLIGHT') as $disctime)
    <script type="text/javascript">
        // Set the date we're counting down to
        //var countDownDate = new Date("Jan 30, 2022 00:00:00").getTime();
        var countDownDate = new Date(<?php echo json_encode(date('M d, Y H:i:s', strtotime($disctime->end_at)) ); ?>).getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();

          var plusday = 60 * 60 * 24 * 1000;

          
          // Find the distance between now and the count down date
          var distance = countDownDate - now + plusday;
        
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
          // Display the result in the element with id="demo"
          document.getElementById("demo").innerHTML = "<p class='title-count'>Yuk Order Segera Sebelum Berakhir Masa Promonya</p><b>" 
                                                            + days + "</b>&nbsp;&nbsp;Days&nbsp;&nbsp;<b>" 
                                                            + hours + "</b>&nbsp;&nbsp;Hours&nbsp;&nbsp;<b>"
                                                            + minutes + "</b>&nbsp;&nbsp;minutes&nbsp;&nbsp;<b>" 
                                                            + seconds + "</b>&nbsp;&nbsp;second&nbsp;&nbsp; ";
                                                           
          // If the count down is finished, write some text
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
    </script>
    @endforeach
    

@endsection