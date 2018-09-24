
@extends('FrontEnd.include.header2')
@section('content')
        <!-- Start page content -->
        <div id="page-content" class="page-wrapper">
            <!-- Start Shop Left Side Bar -->
            <div class="shop-left-side-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-push-3">
                            <!-- Start Shop Full Grid View -->
                            <div class="shop-view-area mb-40">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2 col-xs-4">
                                        <div class="shop-tab-pill">
                                            <ul>
                                                <li class="active"><a data-toggle="pill" href="#home"><i class="zmdi zmdi-apps"></i><span></span></a></li>
                                                <li><a data-toggle="pill" href="#menu1"><i class="zmdi zmdi-view-list"></i><span></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-8">
                                        <div class="shop-tab-pill">
                                            <div class="show-label text-center">
                                                <label class="text-uppercase">Sort by : </label>
                                                <select>
                                                    <option selected="selected" value="position">Position</option>
                                                    <option value="Name">Name</option>
                                                    <option value="Price">Price</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 hidden-xs">
                                        <div class="shop-pagination">
                                            <ul>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 hidden-xs">
                                        <div class="shop-tab-pill show">
                                            <div class="show-label text-center">
                                                <label class="text-uppercase">showing </label>
                                                <select>
                                                    <option selected="selected" value="position">9</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Of Shop Full Grid View -->  
                            <!-- Start Product List -->
                            <div class="product-list-tab">
                                <div class="row">
                                    <div class="product-list tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            
                                                @foreach ($getProducts as $products)
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.html">
                                                                <img src="{{asset('images/backend_images/products/large/'.$products->image)}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.html" title="Slim Shirt With Stretch">{{$products->name}}</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">$ {{$products->Price}}</span>
                                                        </div>
                                                    </div>
                                                </div>    
                                                
                                            
                                            </div>



                                             <!--Quickview Product Start -->
                            <div id="quickview-wrapper">
                                <!-- Modal -->
                                <div class="modal fade" id="productModal" >
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" type="button"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-product">
                                                    <div class="single-product-image">
                                                        <div id="product-img-content">
                                                            <div id="my-tab-content" class="tab-content mb-20">
                                                                <div class="tab-pane b-img active" id="view1">
                                                                    <a class="venobox" href="{{asset('images/backend_images/products/large/'.$products->image)}}" data-gall="gallery" title=""><img src="{{asset('images/backend_images/products/large/'.$products->image)}}" alt=""></a>
                                                                </div>
                                                                
                                                            </div>
                                                            <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                                                                <div class="pro-view b-img active"><a href="#view1" data-toggle="tab"><img src="{{asset('images/backend_images/products/large/'.$products->image)}}" alt=""></a></div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>                            
                                                    <div class="product-details-content">
                                                        <div class="product-content text-uppercase">
                                                            <a href="product-details.html" title="Slim Shirt With Stretch">{{$products->name}}</a>
                                                            <div class="rating-icon pb-20 mt-10">
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star-half"></i>
                                                                <i class="zmdi zmdi-star-half"></i>
                                                            </div>
                                                            <div class="product-price pb-20">
                                                                <span class="new-price">$ {{$products->Price}}</span>
                                                                <span class="old-price">£ 200.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-view pb-20">
                                                            <h4 class="product-details-tilte text-uppercase">overview</h4>
                                                            <p>{{$products->description}}</p>
                                                        </div>
                                                        <div class="product-size text-uppercase pb-30">
                                                            <h4 class="product-details-tilte text-uppercase pb-10">size</h4>
                                                            <ul>
                                                                <li><a href="#">s</a></li>
                                                                <li><a href="#">m</a></li>
                                                                <li><a href="#">l</a></li>
                                                                <li><a href="#">xl</a></li>
                                                                <li><a href="#">xxl</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-attributes clearfix">
                                                            <div class="product-color text-uppercase pb-30">
                                                                <h4 class="product-details-tilte text-uppercase pb-10">color</h4>
                                                                <ul>
                                                                    <li class="color-1"><a href="#"></a></li>
                                                                    <li class="color-2"><a href="#"></a></li>
                                                                    <li class="color-3"><a href="#"></a></li>
                                                                    <li class="color-4"><a href="#"></a></li>
                                                                </ul>
                                                            </div> 
                                                            <div class="pull-left" id="quantity-wanted">
                                                                <h4 class="product-details-tilte text-uppercase pb-10">quantity</h4>
                                                                <input type="number" value="1">  
                                                            </div>                                  
                                                        </div>
                                                        <div class="product-action-shop text-center mb-30">
                                                            <a href="#" title="Quick view">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                        <div class="socialsharing-product">
                                                            <h4 class="product-details-tilte text-uppercase pb-10">share this on</h4>
                                                            <button type="button"><i class="zmdi zmdi-facebook"></i></button>
                                                            <button type="button"><i class="zmdi zmdi-instagram"></i></button>
                                                            <button type="button"><i class="zmdi zmdi-rss"></i></button>
                                                            <button type="button"><i class="zmdi zmdi-twitter"></i></button>
                                                            <button type="button"><i class="zmdi zmdi-pinterest"></i></button>
                                                        </div>
                                                    </div>
                                                    <!-- .product-info -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--End of Quickview Product-->
                                                @endforeach
                                           
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- End Of Product List -->        
                            <!-- Start Shop Full Grid View 2
                            <div class="shop-view-area">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2 col-xs-4">
                                        <div class="shop-tab-pill">
                                            <ul>
                                                <li class="active"><a data-toggle="pill" href="#home"><i class="zmdi zmdi-apps"></i><span></span></a></li>
                                                <li><a data-toggle="pill" href="#menu1"><i class="zmdi zmdi-view-list"></i><span></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-8">
                                        <div class="shop-tab-pill">
                                            <div class="show-label text-center">
                                                <label class="text-uppercase">Sort by : </label>
                                                <select>
                                                    <option selected="selected" value="position">Position</option>
                                                    <option value="Name">Name</option>
                                                    <option value="Price">Price</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 hidden-xs">
                                        <div class="shop-pagination">
                                            <ul>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 hidden-xs">
                                        <div class="shop-tab-pill show">
                                            <div class="show-label text-center">
                                                <label class="text-uppercase">showing </label>
                                                <select>
                                                    <option selected="selected" value="position">9</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            End Of Shop Full Grid View 2 -->                  
                        </div>
                        <div class="col-xs-12 col-sm-3 col-sm-pull-9">
                            <div class="aside-list">
                                <aside class="single-aside mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">Categories</h4>
                                    <div id="cat-treeview" class="product-cat">
                                        <ul class="treeview">
                                            <?php echo $categoryList ?>
                                            {{-- <li class="closed"><a href="#">Electronic</a>
                                                <ul>
                                                    <li><a href="#">Television</a>
                                                        <ul>
                                                            <li><a href="#">LCD TV</a></li>
                                                            <li><a href="#">LED TV</a></li>
                                                            <li><a href="#">Plasma TV</a></li>
                                                            <li><a href="#">Curved TV</a></li>
                                                        </ul>
                                                    </li>
                                                    <!--
                                                    <li><a href="#">Refrigrator</a>
                                                        <ul>
                                                            <li><a href="#">LG</a></li>
                                                            <li><a href="#">Samsung</a></li>
                                                            <li><a href="#">Tosiba</a></li>
                                                            <li><a href="#">Panasonic</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Air Conditanior</a>
                                                        <ul>
                                                            <li><a href="#">General</a></li>
                                                            <li><a href="#">Singer</a></li>
                                                            <li><a href="#">Samsung</a></li>
                                                            <li><a href="#">Gree</a></li>
                                                        </ul>
                                                    </li>
                                                    -->
                                                </ul>
                                            </li> --}}
                                            <!--
                                            <li class="closed"><a href="#">Features</a>
                                                <ul class="treeview">
                                                    <li><a href="#">Men Bag</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Tops</a></li>
                                                    <li><a href="#">Watch</a></li>
                                                    <li><a href="#">T-shirt</a></li>
                                                </ul>
                                            </li>
                                            <li class="closed"><a href="#">Accessories</a>
                                                <ul class="treeview">
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">LG</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                </ul>
                                            </li>
                                            <li class="closed"><a href="#">Top Brands</a>
                                                <ul class="treeview">
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">LG</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                </ul>
                                            </li>
                                            <li class="closed"><a href="#">Jewelry</a></li>
                                            <li class="closed"><a href="#">Features</a></li>
                                            <li class="closed"><a href="#">Transportation</a></li>
                                            <li class="closed"><a href="#">Video Games</a></li>
                                            -->
                                        </ul>
                                    </div>
                                </aside>
                                <aside class="single-aside mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">price</h4>
                                    <div class="price-filter mt-10">
                                        <div class="price-slider-amount mb-10">
                                            <label>You range</label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </aside> 
                                <aside class="single-aside aside-size mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">size</h4>
                                    <ul class="text-ash text-uppercase mt-20">
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">s</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">sl</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </aside> 
                                <aside class="single-aside aside-color mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">color</h4>
                                    <ul class="mt-20">
                                        <li class="color-1"><a href="#"></a></li>
                                        <li class="color-2"><a href="#"></a></li>
                                        <li class="color-3"><a href="#"></a></li>
                                        <li class="color-4"><a href="#"></a></li>
                                        <li class="color-5"><a href="#"></a></li>
                                        <li class="color-6"><a href="#"></a></li>
                                        <li class="color-7"><a href="#"></a></li>
                                    </ul>
                                </aside> 
                                <aside class="single-aside product-cat mb-40">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">filter by brands</h4>
                                    <ul class="text-uppercase">
                                        <li><a href="#">raibon</a></li>
                                        <li><a href="#">Aenim</a></li>
                                        <li><a href="#">Aolo</a></li>
                                        <li><a href="#">nike</a></li>
                                        <li><a href="#">yellow</a></li>
                                        <li><a href="#">arong</a></li>
                                    </ul>
                                </aside> 
                                <aside class="single-aside aside-img">
                                    <a href="#" class="b-img widget-img text-uppercase">
                                        <img src="{{asset('images/frontend_images/widget/1.jpg')}}" alt="">
                                        <div class="best">best</div>
                                        <div class="brand">brand</div>
                                    </a>
                                </aside>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Shop Left Side Bar -->
        
    <!-- Body main wrapper end -->
@endsection
        