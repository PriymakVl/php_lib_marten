{% for product in products %}
    <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
        <div class="product-wrapper mb-10">
            <div class="product-img">
                <a href="/product/{{ product.id }}">
                    <img src="/assets/img/product/card/{{ product.images[0].src }}" alt="">
                </a>
                <div class="product-action">
                    <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                        <i class="ti-plus"></i>
                    </a>
                    <a title="Add To Cart" href="#">
                        <i class="ti-shopping-cart"></i>
                    </a>
                </div>
                <div class="product-action-wishlist">
                    <a title="Wishlist" href="#">
                        <i class="ti-heart"></i>
                    </a>
                </div>
            </div>
            <!-- content -->
            <div class="product-content">
                <h4><a href="/product/{{ product.id }}">{{ product.name }}</a></h4>
                <div class="product-price">
                    <span class="new">${{ product.price }}.00 </span>
                    {% if product.price_old %}
                        <span class="old">${{ product.price_old }}.00</span>
                    {% endif %}
                </div>
            </div>

            <!-- list content -->
            <div class="product-list-content">
                <h4><a href="/product/{{ product.id }}">{{ product.name }}</a></h4>
                <div class="product-price">
                    <span class="new">${{ product.price }}.00</span>
                </div>
                <p>{{ product.description }}</p>
                <div class="product-list-action">
                    <div class="product-list-action-left">
                        <a class="addtocart-btn" title="Add to cart" href="#"><i class="ion-bag"></i> Add to cart</a>
                    </div>
                    <div class="product-list-action-right">
                        <a title="Wishlist" href="#"><i class="ti-heart"></i></a>
                        <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="ti-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endfor %}