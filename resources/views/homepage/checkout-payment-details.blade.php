
@extends('layouts.master')
@section('content')
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
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                    <div class="shop-cart">
                        <div class="row">
                            <div class="col-12 col-xl-8">
                                <div class="checkout-payment">
                                    <div class="card bg-transparent rounded-0 shadow-none">
                                        <div class="card-body">
                                            <div class="steps steps-light">
                                                <a class="step-item active" href="shop-cart.html">
                                                    <div class="step-progress"><span class="step-count">1</span>
                                                    </div>
                                                    <div class="step-label"><i class='bx bx-cart'></i>Cart</div>
                                                </a>
                                                <a class="step-item active" href="checkout-details.html">
                                                    <div class="step-progress"><span class="step-count">2</span>
                                                    </div>
                                                    <div class="step-label"><i class='bx bx-user-circle'></i>Details</div>
                                                </a>
                                                <a class="step-item active" href="checkout-shipping.html">
                                                    <div class="step-progress"><span class="step-count">3</span>
                                                    </div>
                                                    <div class="step-label"><i class='bx bx-cube'></i>Shipping</div>
                                                </a>
                                                <a class="step-item active current" href="checkout-payment.html">
                                                    <div class="step-progress"><span class="step-count">4</span>
                                                    </div>
                                                    <div class="step-label"><i class='bx bx-credit-card'></i>Payment</div>
                                                </a>
                                                <a class="step-item" href="checkout-review.html">
                                                    <div class="step-progress"><span class="step-count">5</span>
                                                    </div>
                                                    <div class="step-label"><i class='bx bx-check-circle'></i>Review</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 shadow-none">
                                        <div class="card-header border-bottom">
                                            <h2 class="h5 my-2">Choose Payment Method</h2>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-pills mb-3 border p-3" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active rounded-0" data-bs-toggle="pill" href="#credit-card" role="tab" aria-selected="true">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon"><i class='bx bx-credit-card font-18 me-1'></i>
                                                            </div>
                                                            <div class="tab-title">Credit Card</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link rounded-0" data-bs-toggle="pill" href="#paypal-payment" role="tab" aria-selected="false">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon"><i class='bx bxl-paypal font-18 me-1'></i>
                                                            </div>
                                                            <div class="tab-title">Paypal</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link rounded-0" data-bs-toggle="pill" href="#net-banking" role="tab" aria-selected="false">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon"><i class='bx bx-mobile font-18 me-1'></i>
                                                            </div>
                                                            <div class="tab-title">Net Banking</div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="credit-card" role="tabpanel">
                                                    <div class="p-3 border">
                                                        <form>
                                                            <div class="mb-3">
                                                                <label class="form-label">Card Owner</label>
                                                                <input type="text" class="form-control rounded-0" placeholder="Card Owner name">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Card number</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control rounded-0" placeholder="Valid Owner number">	<span class="input-group-text rounded-0"><img src="assets/images/icons/mastercard.png" width="35" alt=""></span>
                                                                    <span class="input-group-text rounded-0"><img src="assets/images/icons/visa.png" width="35" alt=""></span>
                                                                    <span class="input-group-text rounded-0"><img src="assets/images/icons/american-express.png" width="35" alt=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-lg-8">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Expiration Date</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control rounded-0" placeholder="MM">
                                                                            <input type="text" class="form-control rounded-0" placeholder="YY">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">CVV</label>
                                                                        <input type="text" class="form-control rounded-0" placeholder="Three digit CCV number">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="d-grid">	<a href="javascript:;" class="btn btn-white btn-ecomm rounded-0">Confirm Payment</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="paypal-payment" role="tabpanel">
                                                    <div class="p-3 border">
                                                        <div class="mb-3">
                                                            <p>Select your Paypal Account type</p>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">Domestic</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">International</label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="d-block">	<a href="javscript:;" class="btn btn-light rounded-0"><i class='bx bxl-paypal'></i>Login to my Paypal</a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p class="mb-0">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="net-banking" role="tabpanel">
                                                    <div class="p-3 border">
                                                        <div class="mb-3">
                                                            <p>Select your Bank</p>
                                                            <select class="form-select rounded-0" aria-label="Default select example">
                                                                <option selected>--Please Select Your Bank--</option>
                                                                <option value="1">Bank Name 1</option>
                                                                <option value="2">Bank Name 2</option>
                                                                <option value="3">Bank Name 3</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="d-block"> <a href="javscript:;" class="btn btn-light rounded-0"><i class='bx bxl-paypal'></i>Login to my Paypal</a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p class="mb-0">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 shadow-none">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-grid">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-chevron-left"></i>Back to Shipping</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-grid">	<a href="javascript:;" class="btn btn-white btn-ecomm">Review Your Order<i class="bx bx-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="order-summary">
                                    <div class="card rounded-0">
                                        <div class="card-body">
                                            <div class="card rounded-0 border bg-transparent shadow-none">
                                                <div class="card-body">
                                                    <p class="fs-5 text-white">Apply Discount Code</p>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control rounded-0" placeholder="Enter discount code">
                                                        <button class="btn btn-light btn-ecomm" type="button">Apply Discount</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded-0 border bg-transparent shadow-none">
                                                <div class="card-body">
                                                    <p class="fs-5 text-white">Order summary</p>
                                                    <div class="my-3 border-top"></div>
                                                    <div class="d-flex align-items-center">
                                                        <a class="d-block flex-shrink-0" href="javascript:;">
                                                            <img src="assets/images/products/01.png" width="75" alt="Product">
                                                        </a>
                                                        <div class="ps-2">
                                                            <h6 class="mb-1"><a href="javascript:;">White Polo T-Shirt</a></h6>
                                                            <div class="widget-product-meta"><span class="me-2">$19.<small>00</small></span><span class="">x 1</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="my-3 border-top"></div>
                                                    <div class="d-flex align-items-center">
                                                        <a class="d-block flex-shrink-0" href="javascript:;">
                                                            <img src="assets/images/products/17.png" width="75" alt="Product">
                                                        </a>
                                                        <div class="ps-2">
                                                            <h6 class="mb-1"><a href="javascript:;">Fancy Red Sneakers</a></h6>
                                                            <div class="widget-product-meta"><span class="me-2">$16.<small>00</small></span><span class="">x 2</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="my-3 border-top"></div>
                                                    <div class="d-flex align-items-center">
                                                        <a class="d-block flex-shrink-0" href="javascript:;">
                                                            <img src="assets/images/products/04.png" width="75" alt="Product">
                                                        </a>
                                                        <div class="ps-2">
                                                            <h6 class="mb-1"><a href="javascript:;">Yellow Shine Blazer</a></h6>
                                                            <div class="widget-product-meta"><span class="me-2">$22.<small>00</small></span><span class="">x 1</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="my-3 border-top"></div>
                                                    <div class="d-flex align-items-center">
                                                        <a class="d-block flex-shrink-0" href="javascript:;">
                                                            <img src="assets/images/products/09.png" width="75" alt="Product">
                                                        </a>
                                                        <div class="ps-2">
                                                            <h6 class="mb-1"><a href="javascript:;">Men Black Hat Cap</a></h6>
                                                            <div class="widget-product-meta"><span class="me-2">$14.<small>00</small></span><span class="">x 1</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card rounded-0 border bg-transparent mb-0 shadow-none">
                                                <div class="card-body">
                                                    <p class="mb-2">Subtotal: <span class="float-end">$198.00</span>
                                                    </p>
                                                    <p class="mb-2">Shipping: <span class="float-end">--</span>
                                                    </p>
                                                    <p class="mb-2">Taxes: <span class="float-end">$14.00</span>
                                                    </p>
                                                    <p class="mb-0">Discount: <span class="float-end">--</span>
                                                    </p>
                                                    <div class="my-3 border-top"></div>
                                                    <h5 class="mb-0">Order Total: <span class="float-end">212.00</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
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
