
@extends('FrontEnd.include.header2')
@section('content')
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
    <!-- Start About us Area -->
    <div class="about-us-area section-padding">
        <div class="container">
                @foreach ($getContent as $content)
            <div class="row">
                    <div class="col-md-12">
                            <div class="section-title-2 text-uppercase text-center mb-40">
                                <h4>About us</h4>
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="about-page-cntent">
                                <h4 class="text-uppercase"><strong>{{$content->heading}}</strong></h4>
                                <p>{{$content->description1}}/p>
                                <blockquote>
                                    <p>{{$content->emphasized_text}}</p>
                                </blockquote>
                                <p>{{$content->description2}}</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="img-element b-img">
                                <img src="{{asset('images/backend_images/about/'.$content->cover_image)}}" alt="">
                            </div>
                        </div>
                    </div>
            
                @endforeach
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-2 text-uppercase text-center mtb-40">
                        <h4>Meet the team</h4>
                    </div>                            
                </div>
            </div>
            <div class="row">
                @foreach ($getTeam as $team)
                <div class="col-md-3 col-sm-4">
                    <div class="item-team text-center text-capitalize">
                        <div class="team-info">
                            <div class="team-img mb-10">
                                <img width="250" height="250" alt="team4" class="img-responsive" src="{{asset('images/backend_images/our-team/'.$team->image)}}">
                                <div class="mask">
                                    <div class="mask-inner">
                                        <a href=""><i class="zmdi zmdi-facebook"></i></a>
                                        <a href=""><i class="zmdi zmdi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>{{$team->name}}</h5>
                        <h6>{{$team->position}}</h6>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-3 col-sm-4">
                    <div class="item-team text-center text-capitalize">
                        <div class="team-info">
                            <div class="team-img mb-10">
                                <img width="250" height="250" alt="team4" class="img-responsive" src="{{url('images/frontend_images/about/2.jpg')}}">
                                <div class="mask">
                                    <div class="mask-inner">
                                        <a href=""><i class="zmdi zmdi-facebook"></i></a>
                                        <a href=""><i class="zmdi zmdi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Luka Biglia</h5>
                        <h6>Programmer</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="item-team text-center text-capitalize">
                        <div class="team-info">
                            <div class="team-img mb-10">
                                <img width="250" height="250" alt="team4" class="img-responsive" src="{{url('images/frontend_images/about/3.jpg')}}">
                                <div class="mask">
                                    <div class="mask-inner">
                                        <a href=""><i class="zmdi zmdi-facebook"></i></a>
                                        <a href=""><i class="zmdi zmdi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Havier Macherano</h5>
                        <h6>Developer</h6>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm">
                    <div class="item-team text-center text-capitalize">
                        <div class="team-info">
                            <div class="team-img mb-10">
                                <img width="250" height="250" alt="team4" class="img-responsive" src="{{url('images/frontend_images/about/4.jpg')}}">
                                <div class="mask">
                                    <div class="mask-inner">
                                        <a href=""><i class="zmdi zmdi-facebook"></i></a>
                                        <a href=""><i class="zmdi zmdi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>Martin Demichelis</h5>
                        <h6>PHP Developer</h6>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End Of About us Area -->
    <!-- Start Brand Area -->
@endsection