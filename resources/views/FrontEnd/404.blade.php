
@extends('FrontEnd.include.header')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start 404 page area -->
            <div class="error-text-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="error-text text-center b-img">
                                <img alt="" src="{{asset('images/frontend_images/404.png')}}">
                                <h4 class="mt-50">Oops! Sorry, we could not find the page</h4>
                                <a class="button extra-small text-uppercase" href="#">
                                    <span>BACK TO HOME PAGE</span>
                                </a>
                                <form method="POST" action="#" class="search-box mt-50">
                                    <div>
                                        <input type="text" autocomplete="off" placeholder="Search" value="">
                                        <button type="submit" class="btn btn-search">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of 404 page area -->

            
          
@include('FrontEnd.include.brand-area')

@include('FrontEnd.include.newsletter')
        </section>
        <!-- End page content -->
 