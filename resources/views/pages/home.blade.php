@extends('layouts.app')

@section('title')
    Invisign - Jasa Pembuatan Design
@endsection

@section('content')
    
    <!-- Header -->
    <header>
        <div class="container">
        <div class="row align-item-center">
            <div class="col-lg-6">
            <h1>
            Turn your ideas into reality,<br />
            Make your own personal <br /> 
            Design
            </h1>
            <br />
            <p>
                Yuk Order Segera Sebelum Berakhir Masa Promonya
            <p>
            <p class="count">
                10 Hari 10 Jam 10 Menit 10 Detik
            <p>
            <a href="" class="btn btn-choose px-4 mt-4">Pilih Sekarang</a>
            </div>
            <div class="col-lg-6">
            
            </div>
        </div> 
        </div>
    </header>

    <!-- Our Produk -->
    <section class="section-ourprod">
        <div class="container">
        <div class="row">
            <div class="col text-center section-ourprod-heading">
            Our Product
            </div>
        </div>
        </div>
        <div class="container">
        <div class="section-ourprod-invite row content-left">
            <div class="col-sm-6 col-md-4 col-lg-6">
            <div class="card-ourprod ">
                <img src="" alt="">
            </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-6">
            <div class="card-ourprod-invite px-5 mt-2">
                <h1> Design Invitation </h1>
                <p> Saatnya beralih ke undangan digital.<br />
                Invisign siap membantu anda sebarkan kabar bahagiamu.<br /></p>
                <a href="{{ route('dinvitation')}}" class="btn btn-cataloginvitation px-4 mt-4">Lihat Katalog</a>
            </div>
            </div>
        </div>
        </div>
        <div class="container">
        <div class="section-ourprod-prod row content-right">
            <div class="col-sm-6 col-md-4 col-lg-6">
            <div class="card-ourprod-desc px-5 mt-2">
                <h2>Design Product</h2>
                <p>
                Personalisasikan produk anda.<br />
                Dengan design yang premium dan elegan.<br />
                </p>
                <a href="" class="btn btn-cataloginvitation px-4 mt-4">Lihat Katalog</a>
            </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-6">
            <div class="card-ourprod">
                <img src="" alt="">
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Paket -->
    <section class="section-package">
        <div class="container">
        <div class="row">
            <div class="text-center title-section ">
            <h1>Pilih Paket</h1>
            </div>
        </div>     
        </div>
        <div class="container">
        <div class="row">
            <div class="section-package-list col-lg-3">
            <div class="card-our-package">
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
                <a href="" class="btn btn-package d-flex flex-column">Pesan Sekarang</a>
            </div>
            </div>
            <div class="section-package-list col-lg-3">
            <div class="card-our-package">
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
                <a href="" class="btn btn-package d-flex flex-column">Pesan Sekarang</a>
            </div>
            </div>
            <div class="section-package-list col-lg-3">
            <div class="card-our-package">
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
                <a href="" class="btn btn-package d-flex flex-column">Pesan Sekarang</a>
            </div>
            </div>
            <div class="section-package-list col-lg-3">
            <div class="card-our-package">
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
                <a href="" class="btn btn-package d-flex flex-column">Pesan Sekarang</a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Tesimoni -->
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
        <div class="row">
            <div class="col text-center">
            <h2>They're Loving Us</h2>
            <p>lorem ipsum dolor</p>
            </div>
        </div>
        </div>

    </section>

    <div class="section-testimonial-content" id="testimonialContent">
        <div class="container">
        <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                <img src="frontend/images/Icon Invisign_Icon Horizontal Colored.png" alt="" class="mb-4 rounded-circle">
                <h3 class="mb-4">Default</h3>
                <p class="testimonial">
                    hay
                </p>
                </div>
                <hr>
                <p class="trip-to mt-2">trip to </p>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection