
@extends('FrontEnd.include.header')
@section('content')
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Blog Page Area -->
            <div class="blog-details-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3 col-xs-12">
                            <div class="single-blog fix">
                                <div class="post-thumbnail mb-50 b-img">
                                    <a href="blog-details.html">
                                        <img src="{{asset('images/frontend_images/blog/b-1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="postinfo-wrapper pl-100">
                                    <div class="post-date text-uppercase ptb-10">
                                        <span class="day">10</span>
                                        <span class="month">Mar</span>
                                    </div>
                                    <div class="post-info">
                                        <h3 class="blog-post-title mb-20">
                                            <a href="blog-details.html">Blog image post layout investigationes demonstraverunt</a>
                                        </h3>
                                        <div class="entry-meta ptb-10 mb-30 text-uppercase">
                                            Posted by
                                            <span class="author vcard">
                                                <a title="View all posts by admin" class="url fn n" href="#">admin</a>
                                            </span>
                                            /
                                            <a href="#">Fashion</a>
                                            ,
                                            <a href="#">HTML</a>
                                        </div>
                                        <div class="entry-summary">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id ultrices, finibus tortor. Mauris eu dui ut lectus fermentum</p>
                                            <blockquote>
                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                            </blockquote>
                                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
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
                        <div class="col-md-3 col-md-pull-9 col-xs-12">
                            <div class="left-blog-sidebar">
                                <div class="blog-sidebar mb-30 fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Search</h4>
                                    <form action="#" id="blog-search">
                                        <input type="text" placeholder="Search">
                                        <button class="submit"><i class="zmdi zmdi-search"></i></button>
                                    </form>
                                </div>
                                <div class="blog-sidebar mb-30 fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Categories</h4>
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">shoes</a></li>
                                        <li><a href="#">Handbags</a></li>
                                        <li><a href="#">Clothing</a></li>
                                    </ul>
                                </div>
                                <div class="blog-sidebar post mb-30 fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Recent Post</h4>
                                    <ul>
                                        <li>
                                            <div class="post-thumb b-img">
                                                <a href="blog-details.html">
                                                    <img src="{{asset('images/frontend_images/product/product-details/s-1.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-details.html">Blog image post</a>
                                                <span>March 10, 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb b-img">
                                                <a href="blog-details.html">
                                                    <img src="{{asset('images/frontend_images/product/product-details/s-2.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-details.html">Blog image post</a>
                                                <span>March 10, 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb b-img">
                                                <a href="blog-details.html">
                                                    <img src="{{asset('images/frontend_images/product/product-details/s-3.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-details.html">Blog image post</a>
                                                <span>March 10, 2015</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-sidebar mb-30 fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Popular Tags</h4>
                                    <ul class="tags-list">
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">accessories</a></li>
                                        <li><a href="#">fashion</a></li>
                                        <li><a href="#">footwear</a></li>
                                        <li><a href="#">good</a></li>
                                        <li><a href="#">kid</a></li>
                                        <li><a href="#">men</a></li>
                                        <li><a href="#">women</a></li>
                                    </ul>
                                    <div class="actions">
                                        <a href="#">View All Tags</a>
                                    </div>
                                </div>
                                <div class="blog-sidebar fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Blog Archives</h4>
                                    <ul>
                                        <li><a href="#">January 2016</a></li>
                                        <li><a href="#">December 2015</a></li>
                                        <li><a href="#">November 2015</a></li>
                                        <li><a href="#">September 2015</a></li>
                                        <li><a href="#">August 2015</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Page Area -->
            <!-- Start Brand Area -->
          
            @include('FrontEnd.include.brand-area')

            @include('FrontEnd.include.newsletter')
            
        </section>
        <!-- End page content -->