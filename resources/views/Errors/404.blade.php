
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Freak') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/frontend_images/favicon.ico')}}">

    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('css/frontend_css/bootstrap.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('css/frontend_css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('css/frontend_css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('css/frontend_css/style.css')}}">
    <link rel="stylesheet" href="">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/frontend_css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('css/frontend_css/custom.css')}}">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="{{asset('css/frontend_css/style-customizer.css')}}">

    <link href="#" data-style="styles" rel="stylesheet">


    <!-- Modernizr JS -->
    <script src="{{asset('js/frontend_js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper"

    
@include('FrontEnd.include.navbar')


 
        <section id="page-content" class="page-wrapper">
            <!-- Start 404 page area -->
            <div class="error-text-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="error-text text-center b-img">
                                
                                <h4 class="mt-50">Oops! Sorry, we could not find the page</h4>
                                <img alt="" src="{{asset('images/frontend_images/404.png')}}">
                                <a class="button extra-small text-uppercase" href="{{url('/')}}">
                                    <span>BACK TO HOME PAGE</span>
                                </a>
                                {{-- <form method="POST" action="#" class="search-box mt-50">
                                    <div>
                                        <input type="text" autocomplete="off" placeholder="Search" value="">
                                        <button type="submit" class="btn btn-search">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of 404 page area -->
    
@include('FrontEnd.include.brand-area')

@include('FrontEnd.include.newsletter')

@include('FrontEnd.include.footer')

       