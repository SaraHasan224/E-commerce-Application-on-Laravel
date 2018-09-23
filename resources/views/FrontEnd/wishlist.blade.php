
@extends('FrontEnd.include.header')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Wishlist Area -->
            <div class="wishlist-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wishlist-content">
                                <form action="#">
                                    <div class="wishlist-table table-responsive p-30 text-uppercase">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail"></th>
                                                    <th class="product-name"><span class="nobr">Product</span></th>
                                                    <th class="product-prices"><span class="nobr"> Price </span></th>
                                                    <th class="product-stock-stauts"><span class="nobr"> stock status </span></th>
                                                    <th class="product-add-to-cart"><span class="nobr">Add to Cart </span></th>
                                                    <th class="product-remove"><span class="nobr">Remove</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product-thumbnail"><a href="#" title="men’s black t-shirt"><img src="{{asset('images/frontend_images/wishlist/1.jpg')}}" alt="" /></a></td>
                                                    <td class="product-name pull-left mt-20">
                                                        <a href="#" title="men’s black t-shirt">men’s black t-shirt</a>
                                                        <p class="w-color m-0">
                                                            <label> Color :</label>
                                                            black
                                                        </p>
                                                        <p class="w-size m-0">
                                                            <label> size :</label>
                                                            sl
                                                        </p>
                                                    </td>
                                                    <td class="product-prices"><span class="amount">£34.78</span></td>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                                    <td class="product-add-to-cart">
                                                        <a class="button extra-small" href="#" title="Add to Cart">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </td>
                                                    <td class="product-remove"><a href="#">×</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="product-thumbnail"><a href="#" title="men’s black t-shirt"><img src="{{asset('images/frontend_images/wishlist/2.jpg')}}" alt="" /></a></td>
                                                    <td class="product-name pull-left mt-20">
                                                        <a href="#" title="men’s black t-shirt">men’s black t-shirt</a>
                                                        <p class="w-color m-0">
                                                            <label> Color :</label>
                                                            black
                                                        </p>
                                                        <p class="w-size m-0">
                                                            <label> size :</label>
                                                            sl
                                                        </p>
                                                    </td>
                                                    <td class="product-prices"><span class="amount">£34.78</span></td>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                                    <td class="product-add-to-cart">
                                                        <a class="button extra-small" href="#" title="Add to Cart">
                                                            <span>Add to cart</span>
                                                        </a>
                                                    </td>
                                                    <td class="product-remove"><a href="#">×</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>  
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Wishlist Area -->
                     
@include('FrontEnd.include.brand-area')

@include('FrontEnd.include.newsletter')

        </section>
        <!-- End page content -->