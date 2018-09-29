 
@extends('FrontEnd.include.header2')
@section('content')
       <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start checkout Area -->
            <div class="checkout-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="billing-details-info azure-bg p-30">
                                <div class="billing-title text-uppercase mb-30">
                                    <h5><strong>billing details</strong></h5>
                                </div>
                                <p class="form-row pb-20 m-0">
                                    <input type="text" placeholder="Your Name">
                                </p>
                                <p class="form-row pb-20 m-0">
                                    <input type="text" placeholder="Enter Your Here">
                                </p>
                                <p class="form-row pb-20 m-0">
                                    <input type="text" placeholder="Phone Here">
                                </p>
                                <p class="form-row pb-20 m-0">
                                    <input type="text" placeholder="Company Name Here">
                                </p>
                                <p class="form-row pb-20 m-0">
                                    <input type="text" placeholder="Country">
                                </p>
                                <p class="form-row pb-20 m-0">
                                    <input type="text" placeholder="State">
                                </p>
                                <p class="form-row pb-20 m-0">
                                    <input type="text" placeholder="Town / City">
                                </p>
                                <p class="form-row m-0">
                                    <textarea placeholder="Type Your Message"></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="order-info azure-bg p-30">
                                <div class="billing-title text-uppercase mb-15">
                                    <h5><strong>your order</strong></h5>
                                </div>  
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Men’s Blue T-Shirt</th>
                                            <td>£86.00</td>
                                        </tr>
                                        <tr>
                                            <th>Women’s Blue T-Shirt</th>
                                            <td>£69.00</td>
                                        </tr>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>£155.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping and Handing</th>
                                            <td>£15.00</td>
                                        </tr>
                                        <tr>
                                            <th>Vat</th>
                                            <td>£00.00</td>
                                        </tr>
                                        <tr class="total">
                                            <th>Order Total</th>
                                            <td>£325.00</td>
                                        </tr>
                                    </tbody>
                                </table>   
                                <div class="billing-title text-uppercase mt-40 pb-30">
                                    <h5><strong>payment method</strong></h5>
                                </div>
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title text-uppercase">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    direct bank transfer
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title text-uppercase">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    cheque payment
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title text-uppercase">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    paypal
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a title="Add to Cart" href="#" class="button extra-small">
                                    <span>place order</span>
                                </a>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of checkout Area -->

@endsection