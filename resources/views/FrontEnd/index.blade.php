
@extends('FrontEnd.include.header')

@section('content')
        <!-- Start of slider area -->
        <div class="slider-area">
            <div id="ensign-nivoslider" class="slides">   
                @foreach ($getSliders as $slider)              
                    @php $c = $slider->id; @endphp
                    <img src="{{asset('images/backend_images/slider/'.$slider->image)}}" alt="" title="#htmlcaption{{$c++}}"/>
                @endforeach
            </div>
            <!-- direction 1 -->            
            @foreach ($getSliders as $slider)
                 @php $c = $slider->id; @endphp
                    <div id="htmlcaption{{$c}}" class="nivo-html-caption slider-caption-{{$c}}">
                        <div class="container slider-height">
                            <div class="row slider-height">
                                <div class="col-md-offset-5 col-md-7 slider-height">
                                    <div class="slide-text">
                                        <div class="cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="0s">
                                            <h2><strong>{{$slider->title}}</strong></h2>
                                        </div>
                                        <div class="cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="0s">
                                            <h2>{{$slider->description}}</h2>
                                        </div>
                                        <div class="cap-sub-title wow bounceInDown mb-30 text-white" data-wow-duration="1.5s" data-wow-delay="0s">
                                            <p>{{$slider->text}}</p>
                                        </div>
                                        <div class="cap-shop wow bounceInUp" data-wow-duration="2s" data-wow-delay=".5s">
                                            <a href="/{{$slider->link}}" class="button extra-small text-uppercase">
                                                <span>Shop now</span>
                                            </a>
                                        </div>                      
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                @php $c++; @endphp
             @endforeach
        </div>
          
        <!-- End of slider area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Banner Area -->
            <div class="banner-area section-padding">
                <div class="container">
                    <div class="row">
                        @foreach ($getBanners as $banner)      
                    @php $c = $banner->id; @endphp                    
                            @if($c == 1)
                                <div class="col-sm-5">  
                            @elseif($c == 2)
                                <div class="col-sm-7">  
                            @elseif($c == 3)
                                <div class="col-sm-7">                                  
                            @else
                                <div class="col-sm-5">  
                            @endif
                                <div class="banner-img banner-hover mb-30">
                                    <a href="#" class="b-img">
                                        <img src="{{asset('images/backend_images/banners/'.$banner->image)}}" alt="">
                                    </a>
                                    <div class="shop-cart-icon">
                                        <a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- @if($c == 2)
                                </div> <div class="row">
                                @php $c = 1; @endphp
                            @else
                                @php $c++; @endphp
                            @endif --}}
                        @endforeach                            
                        {{-- <div class="col-sm-7">
                            <div class="banner-img banner-hover rmb-30">
                                <a href="#" class="b-img">
                                    <img src="{{asset('images/frontend_images/banner/3.jpg')}}" alt="">
                                </a>
                                <div class="shop-cart-icon">
                                    <a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="banner-img banner-hover">
                                <a href="#" class="b-img">
                                    <img src="{{asset('images/frontend_images/banner/4.jpg')}}" alt="">
                                </a>
                                <div class="shop-cart-icon">
                                    <a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- End of Banner Area -->
            <!-- Start Product List -->
            <div class="product-list-tab pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-menu section-title section-title  mb-30">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">          
                                    <li role="presentation" class="first-item active">
                                        <a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab">NEW ARRIVAL</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#sale" aria-controls="sale" role="tab" data-toggle="tab">BEST SELES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">MOST WANTED</a>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-list tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="arrival">
                            @foreach ($latestProducts as $product)   
                                    <div class="col-md-3 col-sm-4">
                                        <div class="single-product mb-40">
                                            <div class="product-img-content mb-20">
                                                <div class="product-img">
                                                    <a href="{{url('/products/'.$product->product_id)}}">
                                                        <img src="{{asset('images/backend_images/products/large/'.$product->image)}}" style="width:250px !important; height:333px;" alt="">
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
                                                <a href="product-details.html" title="{{$product->name}}">{{$product->name}}</a>
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
                             {{-- <div class="col-md-3 col-sm-4">
                                        <div class="single-product mb-40">
                                            <div class="product-img-content mb-20">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('images/frontend_images/product/2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <span class="new-label red-color text-uppercase">sale</span>
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
                                                <a href="product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£ 177.00</span>
                                                    <span class="old-price">£ 200.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img-content mb-20">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('images/frontend_images/product/6.jpg')}}" alt="">
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
                                                <a href="product-details.html" title="Tomas Box Logo T-Shirt">Tomas Box Logo T-Shirt</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£ 21.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4">
                                        <div class="single-product mb-40">
                                            <div class="product-img-content mb-20">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('images/frontend_images/product/3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <span class="new-label text-uppercase">New</span>
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
                                                <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£ 38.00</span>
                                                    <span class="old-price">£ 45.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img-content mb-20">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('images/frontend_images/product/7.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <span class="new-label red-color text-uppercase">sale</span>
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
                                                <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£ 21.65</span>
                                                    <span class="old-price">£ 24.60</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 hidden-sm">
                                        <div class="single-product mb-40">
                                            <div class="product-img-content mb-20">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('images/frontend_images/product/4.jpg')}}" alt="">
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
                                                <a href="product-details.html" title="Skinny In Charcoal">Skinny In Charcoal</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£ 38.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img-content mb-20">
                                                <div class="product-img">
                                                    <a href="product-details.html">
                                                        <img src="{{asset('images/frontend_images/product/8.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                                <span class="new-label text-uppercase">New</span>
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
                                                <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£ 21.65</span>
                                                    <span class="old-price">£ 24.60</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                            <div role="tabpanel" class="tab-pane fade" id="sale">
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
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
                                            <a href="product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 177.00</span>
                                                <span class="old-price">£ 200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/6.jpg')}}" alt="">
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
                                            <a href="product-details.html" title="Tomas Box Logo T-Shirt">Tomas Box Logo T-Shirt</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
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
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                                <span class="old-price">£ 45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/7.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
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
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/4.jpg')}}" alt="">
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
                                            <a href="product-details.html" title="Skinny In Charcoal">Skinny In Charcoal</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/8.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
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
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-sm">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">-30%</span>
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
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/5.jpg')}}" alt="">
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
                                            <a href="product-details.html" title="Twill Oversized ">Twill Oversized </a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="featured">
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/4.jpg')}}" alt="">
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
                                            <a href="product-details.html" title="Skinny In Charcoal">Skinny In Charcoal</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/8.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
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
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">-30%</span>
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
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/5.jpg')}}" alt="">
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
                                            <a href="product-details.html" title="Twill Oversized ">Twill Oversized </a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
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
                                            <a href="product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 177.00</span>
                                                <span class="old-price">£ 200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/6.jpg')}}" alt="">
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
                                            <a href="product-details.html" title="Tomas Box Logo T-Shirt">Tomas Box Logo T-Shirt</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-sm">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
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
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                                <span class="old-price">£ 45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="{{asset('images/frontend_images/product/7.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
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
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Product List -->
            <!-- Start Service Area -->
            <div class="service-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120">
                                <i class="zmdi zmdi-shopping-cart"></i>
                                <h4>FREE SHipping</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120">
                                <i class="zmdi zmdi-headset"></i>
                                <h4>24/7 SUPPORT</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120 rm-0">
                                <i class="zmdi zmdi-balance-wallet"></i>
                                <h4>100% MONEY BACK</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Service Area -->
            <!-- Start Sale  Area -->
            <div class="sale-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="section-title text-uppercase mb-40">
                                <h4>on sale</h4>
                            </div>
                            <div class="sale-list">
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="{{asset('images/frontend_images/sale/1.jpg')}}" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="{{asset('images/frontend_images/sale/2.jpg')}}" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="{{asset('images/frontend_images/sale/3.jpg')}}" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="section-title text-uppercase mb-40">
                                <h4>Top Rated</h4>
                            </div>
                            <div class="sale-list">
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="{{asset('images/frontend_images/sale/4.jpg')}}" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="{{asset('images/frontend_images/sale/5.jpg')}}" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="{{asset('images/frontend_images/sale/6.jpg')}}" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="offer-banner">
                                <a href="#">
                                    <img src="{{asset('images/frontend_images/sale/offer.jpg')}}" alt="">
                                </a>
                                <!-- CountDown -->
                                <div class="product-cuntdown white-bg text-center">
                                    <div class="timer">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Sale  Area -->
            <!-- Start Testimonial Area -->
            <div class="testimonial-area">
                <div id="particles-js" class="pt-90 pb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial-title text-white text-uppercase text-center mb-40">
                                    <h4>what customer saying</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <div class="testimonial-list">
                                    <div class="single-testimonial text-center">
                                        <img alt="" src="{{asset('images/frontend_images/testimonial/1.jpg')}}">
                                        <div class="testimonial-info white-bg clearfix">
                                            <div class="testimonial-author text-uppercase">
                                                <h5>ANIKA MOLLIK</h5>
                                                <p>chairmen</p>
                                            </div>
                                            <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt  
    labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                        </div>
                                    </div>
                                    <div class="single-testimonial text-center">
                                        <img alt="" src="{{asset('images/frontend_images/testimonial/2.jpg')}}">
                                        <div class="testimonial-info white-bg clearfix">
                                            <div class="testimonial-author text-uppercase">
                                                <h5>Ashim Kumar</h5>
                                                <p>CEO</p>
                                            </div>
                                            <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt  
    labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
            <!-- End of Testimonial Area -->
            <!-- Start Blog Area -->
            <div class="blog-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-title text-uppercase mb-40">
                                <h4>latest blog</h4>
                            </div>
                        </div>                      
                    </div>
                    <div class="blog-list">
                        <div class="row">
                            @foreach ($getBlogs as $blogs)
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-image">
                                            <a href="#">
                                                <img alt="" src="{{asset('images/backend_images/blogs/'.$blogs->image)}}" style="width:100%; height:185px;">
                                            </a>
                                        </div>
                                        <div class="blog-content pb-20 text-center">
                                            <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : {{$blogs->created_at->format('d M Y')}}</div>
                                            <h5><a class="blog-title text-capitalize" href="#">{{$blogs->title}}</a></h5>
                                            <div class="post-info-author mt-30">
                                                <span class="author mr-20">
                                                    <i class="zmdi zmdi-account"></i>
                                                    By
                                                    <a href="#" title="Posts by admin"> {{$blogs->author}}</a>
                                                </span>
                                                <span class="comments-count mr-20">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                    20 Likes
                                                </span>
                                                <span class="comments-count">
                                                    <i class="zmdi zmdi-comments"></i>
                                                    02 Comments
                                                </span>
                                            </div>
                                        </div>
                                        <div class="blog-content blog-content-overlay pb-20 text-center">
                                            <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : {{$blogs->created_at->format('d M Y')}}</div>
                                            <h5><a class="blog-title text-capitalize" href="#">{{$blogs->title}}</a></h5>
                                            <p>{!!strlen($blogs->description)>150 ? substr($blogs->description,0,150) : $blogs->description!!}</p>
                                            <div class="post-info-author mt-30">
                                                <span class="author mr-20">
                                                    <i class="zmdi zmdi-account"></i>
                                                    By
                                                    <a href="#" title="Posts by admin"> {{$blogs->author}} </a>
                                                </span>
                                                <span class="comments-count mr-20">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                    20 Likes
                                                </span>
                                                <span class="comments-count">
                                                    <i class="zmdi zmdi-comments"></i>
                                                    02 Comments
                                                </span>
                                            </div>
                                            <a href="#" class="button extra-small mt-60 text-uppercase">
                                                <span>Read More</span>
                                            </a>
                                        </div>                                    
                                    </div>
                                </div>                                 
                            @endforeach


                            {{-- <div class="col-md-4 col-sm-6">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="#">
                                            <img alt="" src="{{asset('images/frontend_images/blog/2.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="blog-content pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                    </div>
                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                        <a href="#" class="button extra-small mt-60 text-uppercase">
                                            <span>Read More</span>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>  
                            <div class="col-md-4 hidden-sm">
                                <div class="single-blog rm-0">
                                    <div class="blog-image">
                                        <a href="#">
                                            <img alt="" src="{{asset('images/frontend_images/blog/1.jpg')}}">
                                        </a>
                                    </div>
                                    <div class="blog-content pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                    </div>
                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                        <a href="#" class="button extra-small mt-60 text-uppercase">
                                            <span>Read More</span>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>                             --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Blog Area -->
  

@endsection