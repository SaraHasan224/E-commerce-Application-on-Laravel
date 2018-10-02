
@extends('FrontEnd.include.header2')
@section('content')
       <!-- Start page content -->
       <section id="page-content" class="page-wrapper">
        <!-- Map Area Start -->
        <div class="map-area">
            <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=NED%20University%2CKarachi%2CSindh%2CPakistan+(googleMap)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">Add Google Map to website</a> by <a href="https://www.mapsdirections.info/en/">Measure area on map</a></iframe></div><br />
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
                                    <h4><strong>Get in touch</strong></h4>
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
                                @foreach ($getAddress as $address)
                                    <ul class="toggle-footer text-ash p-30">
                                        <li class="mb-30 pl-45">
                                            <i class="zmdi zmdi-pin"></i>
                                            <p>{{$address->location}}</p>
                                        </li>
                                        <li class="mb-30 pl-45">
                                            <i class="zmdi zmdi-email"></i>
                                            <p>{{$address->email}}</p>
                                        </li>
                                        <li class="pl-45">
                                            <i class="zmdi zmdi-phone"></i>
                                            <p>{{$address->contactNumber}}</p>
                                        </li>
                                    </ul>                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Address Information Area End -->

@endsection