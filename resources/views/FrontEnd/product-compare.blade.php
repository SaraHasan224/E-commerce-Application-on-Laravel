
@extends('FrontEnd.include.header2')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Shop Full Grid View -->
            <div class="compare-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="compare-item-thumb fix">
                                <div class="col-md-3 col-md-offset-2 col-sm-4">
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img alt="" src="{{asset('images/frontend_images/product/1.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img alt="" src="{{asset('images/frontend_images/product/2.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <!-- single product start-->
                                    <div class="upload-prodcut text-center ptb-90">
                                        <div class="upload-box text-uppercase">                                  
                                            <input type="file" name="file" id="file">
                                            <label for="file"> <img alt="" src="images/compare.png"></label>
                                            <p>Add Product</p>
                                        </div>
                                    </div>
                                    <!-- single product end-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="table-responsive compare-wraper mt-30">
                                <table class="cart table">
                                    <thead>
                                        <tr>
                                            <th class="table-head th-name uppercase">Product Name</th>
                                            <th class="table-head item-nam">T-Shirt D2000</th>
                                            <th class="table-head item-nam">T-Shirt 32000</th>
                                            <th class="table-head"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="item-quality">Color</td>
                                            <td class="item-des">Grey</td>
                                            <td class="item-des">Sky</td>
                                            <td class="ohter"></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="item-quality">Brand</td>
                                            <td class="item-des">Laddo</td>
                                            <td class="item-des">Albas</td>
                                            <td class="ohter"></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="item-quality">Quality</td>
                                            <td class="item-des">Best Quality</td>
                                            <td class="item-des">Best Quality</td>
                                            <td class="ohter"></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="item-quality">Price</td>
                                            <td class="item-des">$500.00</td>
                                            <td class="item-des">$350.00</td>
                                            <td class="ohter"></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="item-quality">Size</td>
                                            <td class="item-des">XL</td>
                                            <td class="item-des">XL</td>
                                            <td class="ohter"></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="item-quality">Cupon</td>
                                            <td class="item-des">N/A</td>
                                            <td class="item-des">N/A</td>
                                            <td class="ohter"></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="item-quality">Ratting</td>
                                            <td class="item-des">4.9</td>
                                            <td class="item-des">4.7</td>
                                            <td class="ohter"></td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="item-quality">Overview</td>
                                            <td class="item-des"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p></td>
                                            <td class="item-des"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p></td>
                                            <td class="ohter"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Shop Full Grid View -->

                    
@endsection