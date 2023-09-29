@extends('layouts.master')
@section('content')
<!--wrapper-->
<div class="wrapper">
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Checkout</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Complete</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start shop cart-->
            <section class="py-4">
                <div class="container">
                    <div class="card py-3 mt-sm-3">
                        <div class="card-body text-center">
                            <h2 class="h4 pb-3">Thank you for your order!</h2>
                            <p class="fs-sm mb-2">Your order has been placed and will be processed as soon as possible.</p>
                            <p class="fs-sm mb-2">Make sure you make note of your order number, which is <span class="fw-medium">34VB5540K83.</span>
                            </p>
                            <p class="fs-sm">You will be receiving an email shortly with confirmation of your order. <u>You can now:</u>
                            </p><a class="btn btn-light rounded-0 mt-3 me-3" href="index.html">Go back shopping</a><a class="btn btn-white rounded-0 mt-3" href="order-tracking.html"><i class='bx bx-map'></i>Track order</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--end shop cart-->
        </div>
    </div>
    <!--end page wrapper -->
</div>
<!--end wrapper-->

@endsection
