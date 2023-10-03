@extends('layouts.master')

@section('carousel')
    <!--start slider section-->
    <section class="slider-section">
        <div class="first-slider">
            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light">Has just arrived!</h3>
                                    <h1 class="h1">Huge Summer Collection</h1>
                                    <p class="pb-3">Swimwear, Tops, Shorts, Sunglasses &amp; much more...</p>
                                    <div class=""><a class="btn btn-light btn-ecomm" href="javascript:;">Shop Now <i
                                                class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="assets/images/slider/04.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light">Hurry up! Limited time offer.</h3>
                                    <h1 class="h1">Women Sportswear Sale</h1>
                                    <p class="pb-3">Sneakers, Keds, Sweatshirts, Hoodies &amp; much more...</p>
                                    <div class=""><a class="btn btn-white btn-ecomm" href="javascript:;">Shop Now <i
                                                class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="assets/images/slider/05.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-flex align-items-center">
                            <div class="col d-none d-lg-flex justify-content-center">
                                <div class="">
                                    <h3 class="h3 fw-light">Complete your look with</h3>
                                    <h1 class="h1">New Men's Accessories</h1>
                                    <p class="pb-3">Hats &amp; Caps, Sunglasses, Bags &amp; much more...</p>
                                    <div class=""><a class="btn btn-dark btn-ecomm" href="javascript:;">Shop Now <i
                                                class='bx bx-chevron-right'></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="assets/images/slider/03.png" class="img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev"> <span
                        class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next"> <span
                        class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--end slider section-->
@endsection
@section('content')

    <!--start information-->
    <section class="py-3 border-top border-bottom">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-group align-items-center">
                <div class="col p-3">
                    <div class="d-flex align-items-center">
                        <div class="fs-1 text-white"><i class='bx bx-taxi'></i>
                        </div>
                        <div class="info-box-content ps-3">
                            <h6 class="mb-0">FREE SHIPPING &amp; RETURN</h6>
                            <p class="mb-0">Free shipping on all orders over $49</p>
                        </div>
                    </div>
                </div>
                <div class="col p-3">
                    <div class="d-flex align-items-center">
                        <div class="fs-1 text-white"><i class='bx bx-dollar-circle'></i>
                        </div>
                        <div class="info-box-content ps-3">
                            <h6 class="mb-0">MONEY BACK GUARANTEE</h6>
                            <p class="mb-0">100% money back guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col p-3">
                    <div class="d-flex align-items-center">
                        <div class="fs-1 text-white"><i class='bx bx-support'></i>
                        </div>
                        <div class="info-box-content ps-3">
                            <h6 class="mb-0">ONLINE SUPPORT 24/7</h6>
                            <p class="mb-0">Awesome Support for 24/7 Days</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end information-->
    <!--start pramotion-->
    <section class="py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col">
                    <div class="card rounded-0">
                        <div class="row g-0 align-items-center">
                            <div class="col">
                                <img src="assets/images/promo/01.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase">Mens' Wear</h5>
                                    <p class="card-text text-uppercase">Starting at $9</p>    <a href="javascript:;"
                                                                                                 class="btn btn-light btn-ecomm">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-0">
                        <div class="row g-0 align-items-center">
                            <div class="col">
                                <img src="assets/images/promo/02.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase">Womens' Wear</h5>
                                    <p class="card-text text-uppercase">Starting at $9</p>    <a href="javascript:;"
                                                                                                 class="btn btn-light btn-ecomm">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card rounded-0">
                        <div class="row g-0 align-items-center">
                            <div class="col">
                                <img src="assets/images/promo/03.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase">Kids' Wear</h5>
                                    <p class="card-text text-uppercase">Starting at $9</p>    <a href="javascript:;"
                                                                                                 class="btn btn-light btn-ecomm">SHOP
                                        NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end pramotion-->

    <!--start Featured product-->
    @include('partials.featured')
    <!--end Featured product-->
    <!--start New Arrivals-->
    @include('partials.new-arrived')
    <!--end New Arrivals-->
    <!--start Advertise banners-->
    @include('partials.advertise-banners')
    <!--end Advertise banners-->
    <!--start categories-->
    @include('partials.categories-list')
    <!--end categories-->
    <!--start support info-->
    @include('partials.support-info')
    <!--end support info-->
    <!--start News-->
{{--    @include('partials.start-news')--}}
    <!--end News-->
    <!--start brands-->
    @include('partials.bands')
    <!--end brands-->
    <!--start bottom products section-->
    @include('partials.bottom-products')
    <!--end bottom products section-->
@endsection
@push('scripts')
    <script src="{{asset('assets/js/index.js')}}"></script>
@endpush
