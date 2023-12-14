<div class="main-menu text-center">
    <nav>
        <ul>
            <li><a href="/">HOME</a></li>
            <li class="mega-menu-position"><a href="shop-page.html">Food</a>
                <ul class="mega-menu">
                    {% for main in cats %}
                        <li>
                            <ul>
                                <li class="mega-menu-title">{{ main.name }}</li>
                                {% for sub in main.sub  %}
                                    <li>
                                        <a href="/shop/{{ sub.id }}">{{ sub.name }}</a>
                                    </li>
                                {% endfor %}   
                            </ul>
                        </li>
                    {% endfor %}
                    <li>
                        <ul>
                            <li><a href="shop-page.html"><img alt="" src="/assets/img/banner/menu-img-4.jpg"></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- blog -->
            <li><a href="/blog">Blog</a>
            </li>
            <!-- about -->
            <li><a href="about-us.html">ABOUT</a></li>
            <!-- contact us -->
            <li><a href="contact.html">contact us</a></li>
            <!-- contact us -->
            <li><a href="/admin/products">admin</a></li>
        </ul>
    </nav>
</div>