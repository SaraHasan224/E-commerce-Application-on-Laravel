
@extends('FrontEnd.include.header2')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Blog Page Area -->
            <div class="blog-details-area section-padding">
                <div class="container">
                    <div class="row">
                    @foreach ($getData as $data)
                        <div class="col-md-12  col-xs-12">
                            <div class="single-blog fix">
                                <div class="post-thumbnail mb-50 b-img">
                                    <a href="{{url('/blog-detail/'.$data->id)}}">
                                        <img src="{{asset('images/backend_images/blogs/'.$data->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="postinfo-wrapper pl-100">
                                    <div class="post-date text-uppercase ptb-10">
                                        <span class="day">{{$data->created_at->format('d')}}</span>
                                        <span class="month">{{$data->created_at->format('M')}}</span>
                                    </div>
                                    <div class="post-info">
                                        <h3 class="blog-post-title mb-20">
                                            <a href="{{url('/blog-detail/'.$data->id)}}">{{$data->title}}</a>
                                        </h3>
                                        <div class="entry-meta ptb-10 mb-30 text-uppercase">
                                            Posted by
                                            <span class="author vcard">
                                                <a title="View all posts by admin" class="url fn n" href="#">{{$data->author}}</a>
                                            </span>
                                            /
                                            <a href="#">Fashion</a>
                                            ,
                                            <a href="#">HTML</a>
                                        </div>
                                        <div class="entry-summary">
                                            <p>{{$data->description}}</p>
                                            <blockquote>
                                                <p>{{$data->emphasized_text}}</p>
                                            </blockquote>
                                            <p>{{$data->description2}}</p>
                                        </div>
                                        <div class="entry-meta ptb-10 mb-30 text-uppercase">
                                            <a href="#">3 comments </a>
                                            <span class="author vcard">/ Tags:</span>
                                            /
                                            <a href="#">fashion</a>
                                            ,
                                            <a href="#">t-shirt</a>
                                            ,
                                            <a href="#">white</a>
                                        </div>
                                        <div class="share-icon text-uppercase mb-50 pt-30">
                                            <h5>Share this post</h5>
                                            <ul>
                                                <li>
                                                    <a target="_blank" class="facebook" href="#">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" class="twitter" href="#">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" class="pinterest" href="#">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" class="google-plus" href="#">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" class="linkedin" href="#">
                                                        <i class="zmdi zmdi-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="author-info mb-30">
                                            <div class="author-avatar b-img">
                                                <img src="{{asset('images/frontend_images/blog/avatar.png')}}" alt="">
                                            </div>
                                            <div class="author-description pl-20">
                                                <h6>
                                                    About the Author:
                                                    <a href="#">Admin</a>
                                                </h6>
                                                <p>Cras id nulla at metus congue auctor. Suspendisse auctor dictum orci quis interdum. Nullam et eleifend metus. Integer in est orci. Duis hendrerit ex metus, vel tempor sem aliquet nec. Donec ornare hendrerit bibendum. Nullam dui erat, tempus eu nisl vitae, venenatis gravida ipsum. Suspendisse potenti.</p>
                                            </div>
                                        </div>
                                        <div class="reply-comment-area mb-20">
                                            <h4 class="mb-50 pt-20">3 comments</h4>
                                            <div class="single-reply mb-20">
                                                <div class="comment-author">
                                                    <img src="{{asset('images/frontend_images/testimonial/1.jpg')}}" alt="">
                                                </div>
                                                <div class="comment-info p-10">
                                                    <div class="comment-author-info mb-10">
                                                        <a href="#">
                                                            <b>admin</b>
                                                        </a>
                                                        Post author
                                                        <span>October 6, 2014 at 1:38 am</span>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <p>just a nice post</p>
                                                </div>
                                            </div>
                                            <div class="single-reply pl-30 mb-20">
                                                <div class="comment-author">
                                                    <img src="{{asset('images/frontend_images/testimonial/2.jpg')}}" alt="">
                                                </div>
                                                <div class="comment-info p-10">
                                                    <div class="comment-author-info mb-10">
                                                        <a href="#">
                                                            <b>admin</b>
                                                        </a>
                                                        Post author
                                                        <span>October 6, 2014 at 1:38 am</span>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <p>just a nice post</p>
                                                </div>
                                            </div>
                                            <div class="single-reply">
                                                <div class="comment-author">
                                                    <img src="{{asset('images/frontend_images/testimonial/1.jpg')}}" alt="">
                                                </div>
                                                <div class="comment-info p-10">
                                                    <div class="comment-author-info mb-10">
                                                        <a href="#">
                                                            <b>admin</b>
                                                        </a>
                                                        Post author
                                                        <span>October 6, 2014 at 1:38 am</span>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <p>just a nice post</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-comment-form-area">
                                            <h4 class="mb-50 pt-20">3 comments</h4>
                                            <form action="#">
                                                <p class="mb-20">Your email address will not be published. Required fields are marked 
                                                    <span class="required">*</span>
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="form-row">
                                                            <label>Name<span class="required">*</span></label>
                                                            <input type="text">
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="form-row">
                                                            <label>Email<span class="required">*</span></label>
                                                            <input type="text">
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="form-row">
                                                            <label>Website<span class="required">*</span></label>
                                                            <input type="text">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="form-row">
                                                            <label>Comment</label>
                                                            <textarea></textarea>
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>
                                            <a class="button extra-small text-uppercase" href="#">
                                                <span>read more</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    @endforeach

                    </div>
                </div>
            </div>
            <!-- End Blog Page Area -->
            <!-- Start Brand Area -->
@endsection