<div class="col-lg-6 col-md-6">
    <div class="product-details-img">
        <img id="zoompro" src="/assets/img/product/big/{{ product.images[0].src }}" data-zoom-image="/assets/img/product/original/{{ product.images[0].src }}" alt="zoom"/>
        <div id="gallery" class="mt-12 product-dec-slider owl-carousel">
            {% for img in product.images %}
                <a data-image="/assets/img/product/big/{{ img.src }}" data-zoom-image="/assets/img/product/original/{{ img.src}}">
                    <img src="/assets/img/product/min/{{ img.src }}" alt="{{ img.alt }}">
                </a>
            {% endfor %}
        </div>
    </div>
</div>