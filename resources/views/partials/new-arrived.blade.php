<section class="py-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-uppercase mb-0">New Arrivals</h5>
            <a href="javascript:;" class="btn btn-light ms-auto rounded-0">View All<i class='bx bx-chevron-right'></i></a>
        </div>
        <hr/>
        <div class="product-grid">
            <div class="new-arrivals owl-carousel owl-theme">
              @foreach($products->where('created_at','>',today()->subDays(5))->take(8) as $product )
                    <div class="item">
                        <div class="card rounded-0 product-card">
                            <div class="card-header bg-transparent border-bottom-0">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="javascript:;">
                                        <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a href="product-details.html">
                                <img src="assets/images/products/09.png" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <div class="product-info">
                                    <a href="javascript:;">
                                        <p class="product-catergory font-13 mb-1">{{$product->category->name}}</p>
                                    </a>
                                    <a href="javascript:;">
                                        <h6 class="product-name mb-2">{{$product->name}}</h6>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">${{$product->realPrice+150}}</span>
                                            <span class="text-white fs-5">${{$product->realPrice}}</span>
                                        </div>
                                        <div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-white"></i>
                                        </div>
                                    </div>
                                    <div class="product-action mt-2">
                                        <div class="d-grid gap-2">
                                            <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
