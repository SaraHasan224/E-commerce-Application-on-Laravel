
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
                                            
                                                @foreach ($getProducts as $product)
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="{{url('/products/'.$product->product_id)}}">
                                                                <img src="{{asset('images/backend_images/products/large/'.$product->image)}}" alt="" style="width:250px !important; height:333px;">
                                                            </a>
                                                        </div>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal{{$product->product_id}}">
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
                                                        <a href="product-details.html" title="Slim Shirt With Stretch">{{$product->name}}</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">$ {{$product->Price}}</span>
                                                        </div>
                                                    </div>
                                                </div>    
                                                
                                            
                                            </div>



                                            <!--Quickview Product Start -->
                            <div id="quickview-wrapper">
                                <!-- Modal -->
                                <div class="modal fade" id="productModal{{$product->product_id}}" >
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
                                                                    <a class="venobox" href="{{asset('images/backend_images/products/large/'.$product->image)}}" data-gall="gallery" title=""><img src="{{asset('images/backend_images/products/large/'.$product->image)}}" alt=""></a>
                                                                </div>
                                                                
                                                            </div>
                                                            <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                                                                <div class="pro-view b-img active"><a href="#view1" data-toggle="tab"><img src="{{asset('images/backend_images/products/large/'.$product->image)}}" alt=""></a></div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>                            
                                                    <div class="product-details-content">
                                                        <div class="product-content text-uppercase">
                                                            <a href="product-details.html" title="{{$product->name}}">{{$product->name}}</a>
                                                            <div class="rating-icon pb-20 mt-10">
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star"></i>
                                                                <i class="zmdi zmdi-star-half"></i>
                                                                <i class="zmdi zmdi-star-half"></i>
                                                            </div>
                                                            <div class="product-price pb-20">
                                                                <span class="new-price">$ {{$product->Price}}</span>
                                                                <span class="old-price">£ 200.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-view pb-20">
                                                            <h4 class="product-details-tilte text-uppercase">overview</h4>
                                                            <p>{{$product->description}}</p>
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
                        </div>
                        <div class="col-xs-12 col-sm-3 col-sm-pull-9">
                            <div class="aside-list">
                                <aside class="single-aside mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">Categories</h4>
                                    <div id="cat-treeview" class="product-cat">
                                        <ul class="treeview">
                                        
                                        {{-- Fetching categories and sub-categories uding basic approach --}}
                                        @foreach($getcategories as $categories)
                                            @if($categories->status == 1)
                                            <li class="closed">
                                                <a href="/shop/{{$categories->url }}">{{$categories->category_name }}</a>
                                                @php
                                                $getsubcategories = \App\Category::where(['sub_category_id'=>$categories->category_id])->get();
                                                @endphp
                                                @foreach($getsubcategories as $subcategories)
                                                    @if($subcategories->status == 1)
                                                    <ul class="treeview">
                                                        <li><a href="/shop/{{$subcategories->url }}">{{$subcategories->category_name}}</a></li> 
                                                    </ul>
                                                    @endif
                                                @endforeach
                                            </li>
                                            @endif
                                        @endforeach
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
        