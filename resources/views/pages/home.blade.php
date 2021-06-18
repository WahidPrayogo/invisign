@extends('layouts.app')

@section('title')
    Invisign - Jasa Pembuatan Design
@endsection

@section('content')
    
    <!-- Header -->
    <section class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 ">
                    <h1>
                    Turn your ideas into reality,<br />
                    Make your own personal <br /> 
                    Design
                    </h1>
                    <br />
                    <p>
                        Yuk Order Segera Sebelum Berakhir Masa Promonya
                    <p>
                    <p class="countdown">
                        10 Hari 10 Jam 10 Menit 10 Detik
                    <p>
                    <a href="#Package" class="btn btn-choose px-4 mt-4">Pesan Sekarang</a>
                </div>
                <div class="col-lg-6 col-sm-6 ">
                    <div class="text-center img-header">
                        <img src="frontend\images\Prod_All.png" alt="" class="w-100">
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <!-- Our Produk -->
    <section class="section-ourprod ">
        <div class="container">
            <div class="row">
                <div class="col text-center title">
                    <h1>Our Product</h1>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row ourprod-inv align-items-center">
                <div class="col-sm-6 col-md-6 col-lg-6 text-center img-ourprod-inv">
                    <img src="frontend\images\Prod_Invitation.png" alt="" class="w-50 ">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
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
        <div class="container">
            <div class="row ourprod-prod align-items-center">
                <div class="col-sm-6 col-md-6 col-lg-6 ">
                    <div class="ourprod-prod-content py-3">
                        <h2>Design Product</h2></br>
                        <p>
                        Personalisasikan produk anda.<br />
                        Dengan design yang premium dan elegan.<br />
                        </p>
                        <a href="{{ route('dproduct')}}" class="btn btn-ourprod px-4 mt-4">Lihat Katalog</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 text-center img-ourprod-inv">
                    <img src="frontend\images\Prod_Design.png" alt="" class="w-50">
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket -->
    <section class="section-package" id="Package">
        <div class="container">
            <div class="row">
                <div class="text-center title pb-5">
                    <h1>Pilih Paket</h1>
                </div>
            </div>    
        </div>
        <div class="container">
        <div class="row">
            <div class="package-list col-sm-6 col-lg-3 text-center pb-4">
                <div class="card-our-package text-center">
                    <div class="disc-title p-2">
                    Discount 10%
                    </div>
                    <div class="package-title px-2">
                    Paket Undangan <br /> Statis
                    </div>
                    <br />
                    <div class="feature-info">
                    <ul>
                        <li><i class="fa fa-check-circle"></i>&nbsp;Format File .jpg</li>
                        <li><i class="fa fa-check-circle"></i>&nbsp;Free Revisi Minor</li>
                        <li><i class="fa fa-check-circle"></i>&nbsp;Max 1 Foto</li>
                        <li>&nbsp;</li>
                    </ul>
                    </div>
                    <hr>
                    <div class="price">
                    Mulai dari
                    <h5>Rp. 100.000,-</h5>
                    <p> Rp.80.000,- </p>
                    </div>
                    <a href="{{ route('dinvitation')}}" class="btn btn-package px-5">Pesan Sekarang&nbsp;<i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
            <div class="section-package-list col-sm-6 col-lg-3">
            <div class="card-our-package text-center">
                <div class="disc-title p-2">
                Discount 10%
                </div>
                <div class="package-title px-2">
                Paket Undangan <br /> Video
                </div>
                <br />
                <div class="feature-info">
                <ul>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Format File .mp4</li>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Free Revisi Minor</li>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Max 8 Foto</li>
                    <li>&nbsp;</li>
                </ul>
                </div>
                <hr>
                <div class="price">
                Mulai dari
                <h5>Rp. 100.000,-</h5>
                <p> Rp.80.000,- </p>
                </div>
                <a href="{{ route('dinvitation')}}" class="btn btn-package px-5">Pesan Sekarang&nbsp;<i class="fa fa-shopping-cart"></i></a>
            </div>
            </div>
            <div class="section-package-list col-sm-6 col-lg-3 ">
            <div class="card-our-package text-center ">
                <div class="disc-title p-2">
                Discount 10%
                </div>
                <div class="package-title px-2">
                Paket Undangan <br /> Website
                </div>
                <br />
                <div class="feature-info">
                <ul>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Semua Fitur</li>
                    <li><i class="fa fa-check-circle"></i>&nbsp;subdomain.invisign.my.id</li>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Max 10 Foto</li>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Aktif 3 Bulan</li>
                </ul>
                </div>
                <hr>
                <div class="price">
                Mulai dari
                <h5>Rp. 100.000,-</h5>
                <p> Rp.80.000,- </p>
                </div>
                <a href="{{ route('dinvitation')}}" class="btn btn-package  px-5">Pesan Sekarang&nbsp;<i class="fa fa-shopping-cart"></i></a>
            </div>
            </div>
            <div class="section-package-list col-sm-6 col-lg-3">
            <div class="card-our-package text-center">
                <div class="disc-title p-2">
                Discount 10%
                </div>
                <div class="package-title px-2">
                Paket Design  <br /> Produk
                </div>
                <br />
                <div class="feature-info">
                <ul>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Format File .jpg</li>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Free Revisi Minor</li>
                    <li><i class="fa fa-check-circle"></i>&nbsp;Full Custom</li>
                    <li>&nbsp;</li>
                </ul>
                </div>
                <hr>
                <div class="price">
                Mulai dari
                <h5>Rp. 100.000,-</h5>
                <p> Rp.80.000,- </p>
                </div>
                <a href="{{ route('dproduct')}}" class="btn btn-package px-5">Pesan Sekarang&nbsp;<i class="fa fa-shopping-cart"></i></a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Tesimoni -->
    <section class="section-testimonial" id="testimonialHeading">
        <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>They're Loving Us</h2>
            </div>
        </div>
        </div>
        <div class="section-testimonial-content mt-4" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <img class="img-profile rounded-circle center mx-auto" src="frontend\images\Icon_N.png" alt="">
                            <p class="testimonial mt-4">
                                "Good, Easy Process and Reliable"
                            </p>
                            <hr>
                            <p class="username">by username </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection