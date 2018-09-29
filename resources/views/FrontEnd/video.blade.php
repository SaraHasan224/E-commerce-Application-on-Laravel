
@extends('FrontEnd.include.header2')
@section('content')
<!-- Start page content -->
<section id="page-content" class="page-wrapper">
    <!-- Start video Area -->
<div class="button-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Section Title -->
                <div class="shotcode-section-title col-xs-12 text-center text-uppercase">
                    <h3>Videos</h3>
                </div>
                @foreach ($getVideos as $videos)
                    <div class="col-md-12 col-xs-12">
                        <div class="tab-content fix">
                            <div class="tab-pane active" id="preview">
                                <h6 class="sc-sub-title text-uppercase mb-20">{{$videos->title}}</h6>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{$videos->link}}"></iframe>
                                </div>
                            </div>
                            
                        </div>
                    </div>                     
                @endforeach


            </div>
            <!--tab -03 start-->                                      
        </div>
    </div>
</div>              
    <!-- End Of Video Area -->
@endsection