    
@extends('FrontEnd.include.header2')
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
                                                    <td class="product-value">
                                                        <input type="number" value="1">
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
                                                    <td class="product-value">
                                                        <input type="number" value="1">
                                                    </td>
                                                    <td class="product-remove"><a href="#">×</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="product-thumbnail"><a href="#" title="men’s black t-shirt"><img src="{{asset('images/frontend_images/wishlist/3.jpg')}}" alt="" /></a></td>
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
                                                    <td class="product-value">
                                                        <input type="number" value="1">
                                                    </td>
                                                    <td class="product-remove"><a href="#">×</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="cart-requerment mt-50 clearfix">
                                            <div class="col-md-4 col-sm-6 clearfix">
                                                <div class="cart-title text-uppercase">
                                                    <h5 class="mb-30"><strong>ESTIMATE SHIPPING AND TAX</strong></h5>
                                                </div>
                                                <div class="shopping-tax">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="cart-show-label show-label">
                                                                <select>
                                                                    <option selected="selected" value="position">Country</option>
                                                                    <option value="Name">Bangladesh</option>
                                                                    <option value="Price">india</option>
                                                                    <option value="Price">Nepal</option>
                                                                </select>                                                                
                                                            </div>
                                                            <div class="cart-show-label show-label mt-15">
                                                                <select>
                                                                    <option selected="selected" value="position">State/Province</option>
                                                                    <option value="Name">Sreepur</option>
                                                                    <option value="Price">Mirpur</option>
                                                                    <option value="Price">Rampura</option>
                                                                </select>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="cart-show-label show-label">
                                                                <select>
                                                                    <option selected="selected" value="position">City</option>
                                                                    <option value="Name">Bangladesh</option>
                                                                    <option value="Price">dhaka</option>
                                                                    <option value="Price">Delli</option>
                                                                    <option value="Price">kolkata</option>
                                                                    <option value="Price">khulna</option>
                                                                </select>                                                                
                                                            </div>
                                                            <div class="cart-show-label show-label mt-15">
                                                                <select>
                                                                    <option selected="selected" value="position">Zip/Postal Code</option>
                                                                    <option value="Name">1200</option>
                                                                    <option value="Price">1201</option>
                                                                    <option value="Price">1202</option>
                                                                    <option value="Price">1203</option>
                                                                    <option value="Price">1204</option>
                                                                </select>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="button extra-small pull-right mt-20" href="#" title="Add to Cart">
                                                    <span>Get a Quote</span>
                                                </a>
                                            </div> 
                                            <div class="col-md-4 col-sm-6 clearfix">
                                                <div class="counpon-info ml-35">
                                                    <div class="cart-title text-uppercase">
                                                        <h5 class="mb-30"><strong>COUPON DISCOUNT</strong></h5>
                                                    </div>
                                                    <div class="coupon-discount">
                                                        <label class="pb-10">Enter Your Coupon Code Here</label>
                                                        <input type="text">
                                                    </div> 
                                                    <a class="button extra-small pull-right mt-35" href="#" title="Add to Cart">
                                                        <span>Apply Coupon</span>
                                                    </a>       
                                                </div>
                                            </div> 
                                            <div class="col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 clearfix">
                                                <div class="counpon-total ml-35">
                                                    <div class="cart-title text-uppercase">
                                                        <h5 class="mb-30"><strong>CART TOTAL</strong></h5>
                                                    </div>
                                                    <table>
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th>Subtotal</th>
                                                                <td>£215.00</td>
                                                            </tr>
                                                            <tr class="cart-shipping">
                                                                <th>Shipping</th>
                                                                <td>Free Shipping</td>
                                                            </tr>
                                                            <tr class="cart-total">
                                                                <th>Grand Total</th>
                                                                <td>£215.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table> 
                                                    <a class="button extra-small pull-right" href="#" title="Add to Cart">
                                                        <span>Procced to checkout</span>
                                                    </a>                                                     
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>  
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Wishlist Area -->

@endsection