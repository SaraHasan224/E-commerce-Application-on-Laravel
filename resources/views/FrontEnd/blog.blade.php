
@extends('FrontEnd.include.header2')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Blog Page Two Area -->
            

        <div class="brand-area pb-90 section-padding fixing">
            <div class="container">
                    <div class="row">
                    {{-- @foreach ($getBlogs as $blogs)
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-blog-2 mb-30">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-image">
                                            <a href="blog-details.html">
                                                <img src="{{asset('images/backend_images/blogs/'.$blogs->image)}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-desc text-center pt-30">
                                            <h6 class="blog-title-2 text-text-capitalize">
                                                <a href="blog-details.html">Blog Post Dummy Title</a>
                                            </h6>
                                            <p>There are many variations of passages of in psum available, but the majority have...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    @foreach ($getBlogs as $blogs)
                                    {{-- <div class="blog-list"> --}}
                                            <div class="col-sm-4 col-xs-12" style="margin-bottom: 20px;">
                                                <div class="single-blog">
                                                    <div class="blog-image">
                                                        <a href="#">
                                                            <img alt="" src="{{asset('images/backend_images/blogs/'.$blogs->image)}}" style="width:100%; height:185px;">
                                                        </a>
                                                    </div>
                                                    <div class="blog-content pb-20 text-center">
                                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : {{$blogs->created_at->format('d M Y')}}</div>
                                                        <h5><a class="blog-title text-capitalize" href="#">{{$blogs->title}}</a></h5>
                                                        <div class="post-info-author mt-30">
                                                            <span class="author mr-20">
                                                                <i class="zmdi zmdi-account"></i>
                                                                By
                                                                <a href="#" title="Posts by admin"> {{$blogs->author}}</a>
                                                            </span>
                                                            <span class="comments-count mr-20">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                                20 Likes
                                                            </span>
                                                            <span class="comments-count">
                                                                <i class="zmdi zmdi-comments"></i>
                                                                02 Comments
                                                            </span> 
                                                        </div>
                                                    </div>
                                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : {{$blogs->created_at->format('d M Y')}}</div>
                                                        <h5><a class="blog-title text-capitalize" href="#">{{$blogs->title}}</a></h5>
                                                        <p>{!!strlen($blogs->description)>150 ? substr($blogs->description,0,150) : $blogs->description!!}</p>
                                                        <div class="post-info-author mt-30">
                                                            <span class="author mr-20">
                                                                <i class="zmdi zmdi-account"></i>
                                                                By
                                                                <a href="#" title="Posts by admin"> {{$blogs->author}} </a>
                                                            </span>
                                                            {{-- <span class="comments-count mr-20">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                                20 Likes
                                                            </span>
                                                            <span class="comments-count">
                                                                <i class="zmdi zmdi-comments"></i>
                                                                02 Comments
                                                            </span> --}}
                                                        </div>
                                                        <a href="#" class="button extra-small mt-60 text-uppercase">
                                                            <span>Read More</span>
                                                        </a>
                                                    </div>                                    
                                                </div>
                                            </div>                         
                                    {{-- </div> --}}
                                @endforeach
                       {{-- <div class="col-sm-6 col-xs-12">
                            <div class="single-blog-2 mb-30">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-image">
                                            <a href="blog-details.html">
                                                <img src="images/blog/blog-2/3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-desc text-center pt-30">
                                            <h6 class="blog-title-2 text-text-capitalize">
                                                <a href="blog-details.html">Blog Post Dummy Title</a>
                                            </h6>
                                            <p>There are many variations of passages of in psum available, but the majority have...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-blog-2 mb-30">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-image">
                                            <a href="blog-details.html">
                                                <img src="images/blog/blog-2/4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-desc text-center pt-30">
                                            <h6 class="blog-title-2 text-text-capitalize">
                                                <a href="blog-details.html">Blog Post Dummy Title</a>
                                            </h6>
                                            <p>There are many variations of passages of in psum available, but the majority have...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-blog-2 mb-30">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-image">
                                            <a href="blog-details.html">
                                                <img src="images/blog/blog-2/1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-desc text-center pt-30">
                                            <h6 class="blog-title-2 text-text-capitalize">
                                                <a href="blog-details.html">Blog Post Dummy Title</a>
                                            </h6>
                                            <p>There are many variations of passages of in psum available, but the majority have...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-blog-2 mb-30">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-image">
                                            <a href="blog-details.html">
                                                <img src="images/blog/blog-2/2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-desc text-center pt-30">
                                            <h6 class="blog-title-2 text-text-capitalize">
                                                <a href="blog-details.html">Blog Post Dummy Title</a>
                                            </h6>
                                            <p>There are many variations of passages of in psum available, but the majority have...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="single-blog-2">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-image">
                                            <a href="blog-details.html">
                                                <img src="images/blog/blog-2/3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-desc text-center pt-30">
                                            <h6 class="blog-title-2 text-text-capitalize">
                                                <a href="blog-details.html">Blog Post Dummy Title</a>
                                            </h6>
                                            <p>There are many variations of passages of in psum available, but the majority have...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs">
                            <div class="single-blog-2">
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-image">
                                            <a href="blog-details.html">
                                                <img src="images/blog/blog-2/4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="blog-desc text-center pt-30">
                                            <h6 class="blog-title-2 text-text-capitalize">
                                                <a href="blog-details.html">Blog Post Dummy Title</a>
                                            </h6>
                                            <p>There are many variations of passages of in psum available, but the majority have...</p>
                                            <div class="read-more">
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
            </div>
        </div>
            <!-- End Blog Page Area -->
            <!-- Start Brand Two Area -->
          
@endsection