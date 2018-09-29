<!-- Start of header area -->
<header>
        <div class="header-top-bar white-bg ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="header-top">
                            <ul>
                                <li class="lh-50">
                                    <a href="#" class="pr-20"><i class="zmdi zmdi-search"></i></a>
                                    <div class="header-bottom-search header-top-down header-top-hover lh-35">
                                        <form class="header-search-box" action="#" method="POST">
                                            <div>
                                                <input type="text" value="" placeholder="Search" autocomplete="off">
                                                <button class="btn btn-search" type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </div>
                                        </form>                                             
                                    </div>
                                </li>
                                <li class="lh-50">
                                    <a href="#" class="prl-20 text-uppercase">USD</a>
                                    <div class="header-top-down header-top-hover pl-15 lh-35">
                                        <ul>
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">Uero</a></li>
                                            <li><a href="#">Taka</a></li>
                                            <li><a href="#">Pound</a></li>
                                            <li><a href="#">Rupi</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="lh-50">
                                    <a href="#" class="prl-20 text-uppercase">ENG</a>
                                    <div class="header-top-down header-top-hover header-top-down-lang pl-15 lh-35 lh-35">
                                        <ul>
                                            <li><a href="#">Bengali</a></li>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">German</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="header-logo text-center">
                            <a href="index.html">
                                <img alt="" src="{{url('images/frontend_images/logo/logo.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="header-top header-top-right">
                            <ul>
                                <li class="lh-50">
                                    <a href="" class="pr-20 text-uppercase">Account</a>
                                    <div class="header-top-down header-top-hover pl-15 lh-35">
                                        <ul>
                                            <a href="{{url('/account')}}" class="pr-20 text-uppercase">Account</a>
                                            <a href="{{url('/log-in')}}" class="pr-20 text-uppercase">Login</a>
                                            <a href="{{url('/logout')}}" class="pr-20 text-uppercase">Logout</a>
                                        </ul>
                                    </div>
                                </li>
                                <li class="lh-50">
                                    <a href="{{url('/wishlist')}}" class="prl-20 text-uppercase">Wishlist</a>
                                </li>
                                <li class="lh-50">
                                    <a href="{{url('/checkout')}}" class="prl-20 text-uppercase">check out</a>
                                </li>
                                <li class="cart-link lh-50">
                                    <a href="{{url('/cart')}}" class="pl-20">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                        <span>2</span>
                                    </a>
                                    <div class="mini-cart-inner header-top-down p-20">
                                        <ul class="cart-list">
                                            <li class="p-10 mb-15">
                                                <a href="#" class="product-image">
                                                    <img src="{{url('images/frontend_images/shop/cart/1.jpg')}}" alt="">
                                                </a>
                                                <div class="product-details ml-10">
                                                    <a href="#" class="remove">
                                                        <i class="zmdi zmdi-close"></i>
                                                    </a>
                                                    <a href="#" class="product-name mb-10">Men’s Black T..</a>
                                                    <span class="selected-color">Color:  Black</span>
                                                    <span class="selected-size">$80.00</span>
                                                </div>
                                            </li>
                                            <li class="p-10 mb-15">
                                                <a href="#" class="product-image">
                                                    <img src="{{url('images/frontend_images/shop/cart/2.jpg')}}" alt="">
                                                </a>
                                                <div class="product-details ml-10">
                                                    <a href="#" class="remove">
                                                        <i class="zmdi zmdi-close"></i>
                                                    </a>
                                                    <a href="#" class="product-name mb-10">Men’s Black T..</a>
                                                    <span class="selected-color">Color:  white</span>
                                                    <span class="selected-size">$65.00</span>
                                                </div>
                                            </li>
                                            <li class="p-10 mb-15">
                                                <a href="#" class="product-image">
                                                    <img src="{{url('images/frontend_images/shop/cart/3.jpg')}}" alt="">
                                                </a>
                                                <div class="product-details ml-10">
                                                    <a href="#" class="remove">
                                                        <i class="zmdi zmdi-close"></i>
                                                    </a>
                                                    <a href="#" class="product-name mb-10">Men’s Black T..</a>
                                                    <span class="selected-color">Color:  Red</span>
                                                    <span class="selected-size">$100.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="border-bottom"></div>
                                        <div class="cart-footer text-center">
                                            <p class="total mtb-15">
                                                Subtotal: 
                                                <span class="ml-35">$190.98</span>
                                            </p>
                                            <p class="buttons m-0">
                                                <a href="{{url('/checkout')}}" class="button extra-small">
                                                    <span>Checkout</span> 
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area header-wrapper transparent-header">
            <div class="header-middle-area black-bg">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-12">
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about')}}">About Us</a></li>
                                        <li class="mega-parent"><a href="{{url('/shop')}}">Shop</a>
                                            <div class="mega-menu-area header-top-hover p-30">
                                                <ul class="single-mega-item">
                                                    <li><h2 class="mega-menu-title mb-15">Men’s</h2></li>
                                                    <li><a href="shop-full.html">Blazers</a></li>
                                                    <li><a href="shop-full.html">Jackets</a></li>
                                                    <li><a href="shop-full.html">Collections</a></li>
                                                    <li><a href="shop-full.html">T-Shirts</a></li>
                                                    <li><a href="shop-full.html">jens pant’s</a></li>
                                                    <li><a href="shop-full.html">sports shoes</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li><h2 class="mega-menu-title mb-15">Women’s</h2></li>
                                                    <li><a href="shop-full.html">Cocktail</a></li>
                                                    <li><a href="shop-full.html">Sunglass</a></li>
                                                    <li><a href="shop-full.html">Evening</a></li>
                                                    <li><a href="shop-full.html">Footwear</a></li>
                                                    <li><a href="shop-full.html">Bootees Bags</a></li>
                                                    <li><a href="shop-full.html">Furniture</a></li>
                                                </ul>
                                                <ul class="single-mega-item">
                                                    <li><h2 class="mega-menu-title mb-15">Accessaories</h2></li>
                                                    <li><a href="shop-full.html">Gagets</a></li>
                                                    <li><a href="shop-full.html">Laptop</a></li>
                                                    <li><a href="shop-full.html">Mobile</a></li>
                                                    <li><a href="shop-full.html">Lifestyle</a></li>
                                                    <li><a href="shop-full.html">Gens pant’s</a></li>
                                                    <li><a href="shop-full.html">Sports items</a></li>
                                                </ul>
                                                <div class="single-mega-item aside-img">
                                                    <a href="shop-full.html" class="b-img widget-img text-uppercase">
                                                        <img src="{{url('images/frontend_images/widget/1.jpg')}}" alt="">
                                                        <div class="best">best</div>
                                                        <div class="brand">brand</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="{{url('/blog')}}">Blog</a></li>
                                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-area"></div>
        </div>
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>                                       
                                    <li><a href="{{url('/shop')}}">Shop</a></li>
                                    <li><a href="{{url('/blog')}}">Blog</a>
                                    <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <!-- Mobile Menu End -->            
    </header>
    <!-- End of header area -->