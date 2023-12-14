<div class="mobile-menu">
    <nav id="mobile-menu-active">
        <ul class="menu-overflow">
            <li>
                <a href="/">HOME</a>
            </li>
            <li><a href="#">pages</a>
                <ul>
                    <li>
                        <a href="about-us.html">about us</a>
                    </li>
                    <li>
                        <a href="shop-page.html">shop page</a>
                    </li>
                    <li>
                        <a href="shop-list.html">shop list</a>
                    </li>
                    <li>
                        <a href="product-details.html">product details</a>
                    </li>
                    <li>
                        <a href="cart.html">cart page</a>
                    </li>
                    <li>
                        <a href="checkout.html">checkout</a>
                    </li>
                    <li>
                        <a href="wishlist.html">wishlist</a>
                    </li>
                    <li>
                        <a href="contact.html">contact us</a>
                    </li>
                    <li>
                        <a href="my-account.html">my account</a>
                    </li>
                    <li>
                        <a href="login-register.html">login / register</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">Food</a>
                <ul>
                    {% for main in cats %}
                        <li><a href="#">{{ main.name }}</a>
                            <ul>
                                {% for sub in main.sub  %}
                                    <li>
                                        <a href="/shop/{{ sub.id }}">{{ sub.name }}</a>
                                    </li>
                                {% endfor %} 
                            </ul>
                        </li>
                    {% endfor %} 
                </ul>
            </li>
            <li><a href="#">blog</a>
                <ul>
                    <li>
                        <a href="blog.html">blog page</a>
                    </li>
                    <li>
                        <a href="blog-leftsidebar.html">blog left sidebar</a>
                    </li>
                    <li>
                        <a href="blog-details.html">blog details</a>
                    </li>
                </ul>
            </li>
            <li><a href="contact.html"> Contact us </a></li>
        </ul>
    </nav>
</div>