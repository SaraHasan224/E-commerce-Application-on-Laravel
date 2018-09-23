
@extends('FrontEnd.include.header')
@section('content')
       <!-- Start page content -->
       <section id="page-content" class="page-wrapper">
        <!-- Map Area Start -->
        <div class="map-area">
            <div id="googleMap" style="width:100%;height:600px;"></div>
        </div>
        <!-- Map Area End -->
        <!-- Address Information Area Start -->
        <div class="address-info-area mb-90">
            <div class="container">
                <div class="row">
                    <div class="address-info p-90 clearfix">
                        <div class="col-md-5 col-sm-6">
                            <div class="contact-form">
                                <div class="title text-uppercase mb-15">
                                    <h4><strong>get in touch</strong></h4>
                                </div>
                                <form id="contact-form" action="mail.php" method="post">
                                    <input type="text" name="name" placeholder="Name*">
                                    <input type="email" name="email" placeholder="E-mail*">
                                    <input type="text" name="subject" placeholder="Subject">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button class="submit-btn mt-20" type="submit">submit message</button>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-5 col-sm-6">
                            <div class="contact-address">
                                <div class="title text-uppercase mb-15">
                                    <h4><strong>CONTACT FORM</strong></h4>
                                </div>
                                <ul class="toggle-footer text-ash p-30">
                                    <li class="mb-30 pl-45">
                                        <i class="zmdi zmdi-pin"></i>
                                        <p>House No 08, Road No 08, <br>
                                        Din Bari, Dhaka, Bangladesh</p>
                                    </li>
                                    <li class="mb-30 pl-45">
                                        <i class="zmdi zmdi-email"></i>
                                        <p>Username@gmail.com <br>
                                        Damo@gmail.com</p>
                                    </li>
                                    <li class="pl-45">
                                        <i class="zmdi zmdi-phone"></i>
                                        <p>+660 256 24857<br>
                                        +660 256 24857</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Address Information Area End -->

              
@include('FrontEnd.include.brand-area')

@include('FrontEnd.include.newsletter')

    </section>
    <!-- End page content -->