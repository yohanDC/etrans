<section class="py-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <h5 class="text-uppercase mb-0">Browse Catergory</h5>
            <a href="shop-categories.html" class="btn btn-light ms-auto rounded-0">View All<i class='bx bx-chevron-right'></i></a>
        </div>
        <hr/>
        <div class="product-grid">
            <div class="browse-category owl-carousel owl-theme">
                @foreach($categories as $category)
                    <div class="item">
                        <div class="card rounded-0 product-card border">
                            <div class="card-body">
                                <img src="assets/images/categories/01.png" class="img-fluid" alt="...">
                            </div>
                            <div class="card-footer text-center">
                                <h6 class="mb-1 text-uppercase">{{$category->name}}</h6>
                                <p class="mb-0 font-12 text-uppercase">{{$category->products_count}} Products</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
