
@extends('FrontEnd.include.header')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Wishlist Area -->
            <div class="my-account-page section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="procced-checkout">
                                <h4 class="procced-title text-uppercase pb-15 mb-20"><strong>Procced to Checkout</strong></h4>
                                <p>Welcome to your account. Here you can manage all of your personal information and orders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="addresses-lists">
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="zmdi zmdi-home"></i>
                                                   <span>Add my first address</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="coupon-info">
                                                    <h6 class="procced-title text-uppercase pb-15 mb-20">Your addresses </h6>
                                                    <p class="text-black">To add a new address, please fill out the form below.</p>
                                                    <p class="required">*Required field</p>
                                                    <form action="#">
                                                        <p class="form-row">
                                                            <label>Your Full Name<span class="required">*</span></label>
                                                            <input type="text" />
                                                        </p>
                                                        <p class="form-row">
                                                            <label>Address<span class="required">*</span></label>
                                                            <input type="text" />
                                                        </p>
                                                        <p class="form-row">
                                                            <label>City<span class="required">*</span></label>
                                                            <input type="text" />
                                                        </p>
                                                        <div class="country-select shop-select">
                                                            <label>Country <span class="required">*</span></label>
                                                            <select>
                                                                <option value="volvo">Bangladesh</option>
                                                                <option value="saab">Algeria</option>
                                                                <option value="mercedes">Afghanistan</option>
                                                                <option value="audi">Ghana</option>
                                                                <option value="audi2">Albania</option>
                                                                <option value="audi3">Bahrain</option>
                                                                <option value="audi4">Colombia</option>
                                                                <option value="audi5">Dominican Republic</option>
                                                            </select>                                       
                                                        </div>
                                                        <p class="form-row">
                                                            <label>Mobile phone<span class="required">*</span></label>
                                                            <input type="text" />
                                                        </p>
                                                        <p class="required">** You must register at least one phone number.</p>
                                                        <p class="form-row order-notes">
                                                            <label>Additional information</label>
                                                            <textarea></textarea>
                                                        </p>
                                                        <p class="form-row">
                                                            <label>Please assign an address title for future reference.<span class="required">*</span></label>
                                                            <input type="text" />
                                                        </p>
                                                        <a class="button extra-small" href="#" title="Add to Cart">
                                                            <span>Save</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    <i class="zmdi zmdi-format-list-numbered"></i>
                                                   <span>My credit slips</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <div class="coupon-info">
                                                    <h6 class="procced-title text-uppercase pb-15 mb-20">Your addresses </h6>
                                                    <p class="text-black">To add a new address, please fill out the form below.</p>
                                                </div>
                                                <div class="default-bg">
                                                    <p class="alert text-white">You have not placed any orders.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                    <i class="zmdi zmdi-folder-outline"></i>
                                                   <span>My addresses</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <div class="coupon-info">
                                                    <h6 class="procced-title text-uppercase pb-15 mb-20">Your addresses </h6>
                                                    <p class="text-black">To add a new address, please fill out the form below.</p>
                                                </div>
                                                <div class="default-bg">
                                                    <p class="alert text-white">You have not placed any orders.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                    <i class="zmdi zmdi-home"></i>
                                                   <span>My personal information</span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                                <div class="coupon-info">
                                                    <h6 class="procced-title text-uppercase pb-15 mb-20">Your addresses </h6>
                                                    <p class="text-black">To add a new address, please fill out the form below.</p>
                                                    <p class="required">*Required field</p>
                                                        <form action="#">
                                                        <p class="form-row">
                                                            <label><span class="required">*</span>Social title</label>
                                                            </p><div class="radio-inline">
                                                                <label class="top">
                                                                    <span class="checked">
                                                                        <input type="radio"> 
                                                                    </span>
                                                                    Mr.
                                                                </label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <label class="top">
                                                                    <span class="checked">
                                                                        <input type="radio"> 
                                                                    </span>
                                                                    Mrs.
                                                                </label>
                                                            </div>
                                                        <p></p>
                                                        <p class="form-row">
                                                            <label><span class="required">*</span>Your Full Name</label>
                                                            <input type="text">
                                                        </p>
                                                        <p class="form-row">
                                                            <label><span class="required">*</span>E-mail address</label>
                                                            <input type="text">
                                                        </p>
                                                        <div class="country-select shop-select">
                                                            <label>Date of Birth</label>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <select>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>                                                               
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select>
                                                                        <option>January</option>
                                                                        <option>February </option>
                                                                        <option>March </option>
                                                                        <option>April </option>
                                                                        <option>May </option>
                                                                        <option>June </option>
                                                                        <option>July </option>
                                                                        <option>August </option>
                                                                        <option>September </option>
                                                                        <option>October </option>
                                                                        <option>November </option>
                                                                        <option>December </option>
                                                                    </select>                                                               
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select>
                                                                        <option>1990</option>
                                                                        <option>1991</option>
                                                                        <option>1992</option>
                                                                        <option>1993</option>
                                                                        <option>1994</option>
                                                                        <option>1995</option>
                                                                        <option>1996</option>
                                                                        <option>1997</option>
                                                                        <option>1998</option>
                                                                        <option>1999</option>
                                                                        <option>2000</option>
                                                                        <option>2001</option>
                                                                        <option>2002</option>
                                                                        <option>2003</option>
                                                                        <option>2004</option>
                                                                        <option>2005</option>
                                                                        <option>2006</option>
                                                                        <option>2007</option>
                                                                        <option>2008</option>
                                                                        <option>2009</option>
                                                                        <option>2010</option>
                                                                        <option>2011</option>
                                                                        <option>2012</option>
                                                                        <option>2013</option>
                                                                        <option>2014</option>
                                                                        <option>2016</option>
                                                                        <option>2016</option>
                                                                        <option>2017</option>
                                                                        <option>2018</option>
                                                                        <option>2019</option>
                                                                        <option>2020</option>
                                                                    </select>                                                        
                                                                </div>
                                                            </div>                                      
                                                        </div>
                                                        <p class="form-row">
                                                            <label><span class="required">*</span>Current Password</label>
                                                            <input type="text">
                                                        </p>
                                                        <p class="form-row">
                                                            <label>New Password</label>
                                                            <input type="text">
                                                        </p>
                                                        <p class="form-row">
                                                            <label>Confirmation</label>
                                                            <input type="text">
                                                        </p>
                                                        <div class="checkbox">
                                                            <label>
                                                                <span><input type="checkbox"></span>
                                                                Sign up for our newsletter!
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <span><input type="checkbox"></span>
                                                                Receive special offers from our partners!
                                                            </label>
                                                        </div>
                                                        <a title="Add to Cart" href="#" class="button extra-small">
                                                            <span>Save</span>
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-6">
                                <div class="myaccount-link-list">                               
                                    <div class="panel panel-default mb-5">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a  href="wishlist.html">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                    <span>My wishlists</span>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="panel panel-default m-0">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a  href="cart.html">
                                                    <i class="zmdi zmdi-format-list-numbered"></i>
                                                    <span>Order history and details</span>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Wishlist Area -->

        </section>
        <!-- End page content -->