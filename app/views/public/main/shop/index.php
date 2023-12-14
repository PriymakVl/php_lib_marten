<div class="shop-area pt-100 pb-100 gray-bg">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">

                {% include 'public/main/shop/_topbar.php' %}

                <div class="grid-list-product-wrapper">
                    <div class="product-view product-grid">
                        <div class="row">

                            {% include 'public/main/shop/_products.php' %}

                        </div>

                        {% include 'public/main/shop/_pagination.php' %}

                    </div>
                </div>
            </div>
            <div class="col-lg-3">

                {% include 'public/main/shop/_sidebar.php' %}

            </div>
        </div>
    </div>
</div>

