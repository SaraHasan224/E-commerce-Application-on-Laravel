  
@extends('FrontEnd.include.header2')
@section('content')
      <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Wishlist Area -->
            <div class="login-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <div class="section-title text-uppercase mb-40">
                                    <h4>REGISTERED CUSTOMERS</h4>
                                </div>
                                <form action="#">
                                    <div class="login-account p-30 box-shadow">
                                        <p>If you have an account with us, Please log in.</p>
                                        <input type="text" placeholder="Email Address" name="name">
                                        <input type="password" placeholder="Password" name="password">
                                        <p><small><a href="#">Forgot our password?</a></small></p>
                                        <button type="submit" class="submit-btn">login</button>
                                    </div>
                                </form>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <div class="section-title text-uppercase mb-40">
                                    <h4>NEW CUSTOMERS</h4>
                                </div>
                                <form action="#">
                                    <div class="login-account p-30 box-shadow">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="First Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="last Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <select class="custom-select">
                                                    <option value="defalt">country</option>
                                                    <option value="c-1">Australia</option>
                                                    <option value="c-2">Bangladesh</option>
                                                    <option value="c-3">Unitd States</option>
                                                    <option value="c-4">Unitd Kingdom</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select class="custom-select">
                                                    <option value="defalt">State</option>
                                                    <option value="c-1">Melbourne</option>
                                                    <option value="c-2">Dhaka</option>
                                                    <option value="c-3">New York</option>
                                                    <option value="c-4">London</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select class="custom-select">
                                                    <option value="defalt">Town/City</option>
                                                    <option value="c-1">Victoria</option>
                                                    <option value="c-2">Chittagong</option>
                                                    <option value="c-3">Boston</option>
                                                    <option value="c-4">Cambridge</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Phone here...">
                                            </div>
                                        </div>
                                        <input type="text" placeholder="Company neme here...">
                                        <input type="text" placeholder="Email address here...">
                                        <input type="password" placeholder="Password">
                                        <input type="password" placeholder="Confirm Password">
                                        <div class="checkbox">
                                            <label class="mr-10"> 
                                                <small>
                                                    <input type="checkbox" name="signup">Sign up for our newsletter!
                                                </small>
                                            </label>
                                            <label> 
                                                <small>
                                                    <input type="checkbox" name="signup">Receive special offers from our partners!
                                                </small>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button value="register" type="submit" class="submit-btn mt-20">Register</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="reset" class="submit-btn mt-20">Clear</button>
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