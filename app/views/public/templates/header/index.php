<header class="header-area">

    {% include 'public/templates/header/_top.php' %}

    <div class="header-bottom transparent-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                    <div class="logo pt-39">
                        <a href="index.html"><img alt="" src="/assets/img/logo/logo.png"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-none d-lg-block">

                    {% include 'public/templates/header/_main_menu.php' %}

                </div>
                <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                    <div class="search-login-cart-wrapper">

                        {% include 'public/templates/header/_search.php' %}
                        
                        <div class="header-login same-style">
                            <a href="login-register.html"><i class="icon-user icons"></i></a>
                        </div>

                        {% include 'public/templates/header/_cart.php' %}

                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">

                    {% include 'public/templates/header/_mobile_menu.php' %}
                
                </div>
            </div>
        </div>
    </div>
</header>